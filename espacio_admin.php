<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/nuevo.css">
    <link href="estilos/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <?php include('base/navbar.php'); ?>

   <br>
   <br>

   <div class="container mx-auto px-4 py-8">
    
    <h1 class="text-3xl font-bold mb-8 text-center text-primary">
       
        Estado del Disco
    </h1>

    <div class="bg-light rounded-lg shadow-lg p-6 mb-8">
        <?php
        $disk_total = disk_total_space("/");
        $disk_free = disk_free_space("/");
        $disk_used = $disk_total - $disk_free;
        $percentage_used = ($disk_used / $disk_total) * 100;
        $percentage_free = 100 - $percentage_used;

        function formatBytes($bytes, $precision = 2) {
            $units = array('B', 'KB', 'MB', 'GB', 'TB');
            $bytes = max($bytes, 0);
            $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
            $pow = min($pow, count($units) - 1);
            $bytes /= (1 << (10 * $pow));
            return round($bytes, $precision) . ' ' . $units[$pow];
        }
        ?>
        
        <div class="d-flex justify-content-between mb-2">
            <span class="font-weight-bold text-dark">Espacio en disco</span>
            <span class="text-muted small">Última actualización: <?php echo date('H:i d/m/Y'); ?></span>
        </div>

        <div class="progress mb-4">
            <div 
                class="progress-bar bg-gradient" 
                style="width: <?php echo $percentage_used; ?>%"
                aria-valuenow="<?php echo $percentage_used; ?>" 
                aria-valuemin="0" 
                aria-valuemax="100"
            ></div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="bg-primary text-white p-4 rounded-lg">
                    <div class="font-weight-bold">Total</div>
                    <div class="h2"><?php echo formatBytes($disk_total); ?></div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="bg-success text-white p-4 rounded-lg">
                    <div class="font-weight-bold">Libre</div>
                    <div class="h2"><?php echo formatBytes($disk_free); ?></div>
                    <div class="small"><?php echo round($percentage_free, 2); ?>% disponible</div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="bg-danger text-white p-4 rounded-lg">
                    <div class="font-weight-bold">En uso</div>
                    <div class="h2"><?php echo formatBytes($disk_used); ?></div>
                    <div class="small"><?php echo round($percentage_used, 2); ?>% utilizado</div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light rounded-lg shadow-lg p-6">
        <h2 class="h4 font-weight-semibold mb-4 text-dark">Particiones del sistema</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Partición</th>
                        <th>Total</th>
                        <th>Libre</th>
                        <th>En uso</th>
                        <th>%</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $partitions = array("/", "/home", "/var", "/tmp");
                    
                    foreach ($partitions as $partition) {
                        if (@disk_total_space($partition)) {
                            $used = disk_total_space($partition) - disk_free_space($partition);
                            $percent = ($used / disk_total_space($partition)) * 100;
                            
                            echo "<tr>";
                            echo "<td>$partition</td>";
                            echo "<td>".formatBytes(disk_total_space($partition))."</td>";
                            echo "<td>".formatBytes(disk_free_space($partition))."</td>";
                            echo "<td>".formatBytes($used)."</td>";
                            echo "<td>
                                <div class='progress' style='width: 100px;'>
                                    <div class='progress-bar ";
                            
                            if ($percent > 90) {
                                echo "bg-danger";
                            } elseif ($percent > 70) {
                                echo "bg-warning";
                            } else {
                                echo "bg-success";
                            }
                            
                            echo "' style='width: $percent%'></div>
                                </div>
                            </td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>










  <?php include('base/scrit.php'); ?>
</body>
</html>
