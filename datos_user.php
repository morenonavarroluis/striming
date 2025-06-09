<?php
 
include "config/conexion.php";

            session_start();

            if (!isset($_SESSION['username'])) {
                header("Location: login.php");
                exit();

            }


 $id = $_SESSION['id']; 



//consulta

$consulta = "SELECT us.id ,us.username, us.password, r.roles FROM users as us
 INNER JOIN rols as r ON us.id_rol = r.id_rols";
// Ejecutar la consulta
$resultado = mysqli_query($conn, $consulta);


   

 include "base/header.php";

?>
    <body class="sb-nav-fixed">
       <?php
        include "base/navbar.php";
       
        include "modal/modal_usuario.php";
        ?>
       <br>
       <br>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">usuario</h1>
                       
                       <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#Modalregistro" style="float: right;">Nuevo Usuario</button>
                            <br>
                            <br>

                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead class="table table-dark">
                                        <tr>
                                            <th>usuario</th>
                                            <th>rols</th>
                                            <th>opcion</th>   
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <?php   while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                        <tr>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['roles']; ?></td>
                                            <td class="text-center">
                                              <form action="config/eliminar.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" class="btn btn-danger center">Eliminar</button>
                                                </form>
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
