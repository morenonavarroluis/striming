<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MercalStream</title>
          <link href="css/styles.css" rel="stylesheet" />
          <link rel="stylesheet" href="css/espacio.css">
        <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="bg-gray-100">
    <?php
   
        include "base/navbar_user.php";
   
    ?>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="disk-icon inline-block mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m-19.5 0v6.75" />
            </svg>
            Estado del Disco
        </h1>

        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
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
            
            <div class="flex justify-between mb-2">
                <span class="font-semibold text-gray-700">Espacio en disco</span>
                <span class="text-gray-500 text-sm">Última actualización: <?php echo date('H:i d/m/Y'); ?></span>
            </div>

            <div class="progress-container mb-4">
                <div 
                    class="progress-bar bg-gradient-to-r from-blue-400 to-blue-600" 
                    style="width: <?php echo $percentage_used; ?>%"
                    aria-valuenow="<?php echo $percentage_used; ?>" 
                    aria-valuemin="0" 
                    aria-valuemax="100"
                ></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-500">
                    <div class="font-bold text-blue-700 mb-1">Total</div>
                    <div class="text-2xl font-semibold text-blue-800"><?php echo formatBytes($disk_total); ?></div>
                </div>

                <div class="bg-green-50 p-4 rounded-lg border-l-4 border-green-500">
                    <div class="font-bold text-green-700 mb-1">Libre</div>
                    <div class="text-2xl font-semibold text-green-800"><?php echo formatBytes($disk_free); ?></div>
                    <div class="text-xs text-green-600"><?php echo round($percentage_free, 2); ?>% disponible</div>
                </div>

                <div class="bg-red-50 p-4 rounded-lg border-l-4 border-red-500">
                    <div class="font-bold text-red-700 mb-1">En uso</div>
                    <div class="text-2xl font-semibold text-red-800"><?php echo formatBytes($disk_used); ?></div>
                    <div class="text-xs text-red-600"><?php echo round($percentage_used, 2); ?>% utilizado</div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Particiones del sistema</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Partición</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Libre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">En uso</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">%</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                        $partitions = array("/", "/home", "/var", "/tmp");
                        
                        foreach ($partitions as $partition) {
                            if (@disk_total_space($partition)) {
                                $used = disk_total_space($partition) - disk_free_space($partition);
                                $percent = ($used / disk_total_space($partition)) * 100;
                                
                                echo "<tr>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>$partition</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>".formatBytes(disk_total_space($partition))."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>".formatBytes(disk_free_space($partition))."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>".formatBytes($used)."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>
                                    <div class='progress-container' style='width: 100px;'>
                                        <div class='progress-bar ";
                                
                                if ($percent > 90) {
                                    echo "bg-gradient-to-r from-red-400 to-red-600";
                                } elseif ($percent > 70) {
                                    echo "bg-gradient-to-r from-yellow-400 to-yellow-600";
                                } else {
                                    echo "bg-gradient-to-r from-green-400 to-green-600";
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

    <div class="text-center text-gray-500 text-xs mt-8 mb-4">
        Sistema de Monitoreo de Disco &copy; <?php echo date('Y'); ?>
    </div>
    <?php include 'base/scrit.php'; ?>
</body>