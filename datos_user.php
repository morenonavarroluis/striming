<?php
 
 //conexion
include "config/conexion.php";

//consulta

$consulta = "SELECT us.username, us.password, r.rol FROM users as us
 INNER JOIN rols as r ON us.id_rol = r.id_rols";
// Ejecutar la consulta
$resultado = mysqli_query($conn, $consulta);


   

 include "base/header.php";

?>
    <body class="sb-nav-fixed">
       <?php
        include "base/navbar.php";
        include "base/sidebar.php";
        include "modal/modal_usuario.php";
        ?>
       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">usuario</h1>
                       
                       <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#Modalregistro" style="float: right;">Nuevo Video</button>
                            <br>
                            <br>

                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead class="table table-dark">
                                        <tr>
                                            <th>usuario</th>
                                            <th>contraseña</th>
                                            <th>rols</th>
                                            <th>opcion</th>   
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <?php   while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                        <tr>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['password']; ?></td>
                                            <td><?php echo $row['rol']; ?></td>
                                            <td class="text-center">
                    
                                               <button class="btn btn-danger center">Eliminar</button>     
                                         
                                            </td>
                                           
                                        </tr>
                                       
                                         <?php   } ?>
                           
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'base/footer.php'; ?>
            </div>
        </div>
     <?php include 'base/scrit.php'; ?>
    </body>
</html>
