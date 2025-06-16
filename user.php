<?php
 
include "config/conexion.php";

            session_start();

            if (!isset($_SESSION['id_rol'])) {
                header("Location: login.php");
                exit();

            }


 $id = $_SESSION['id']; 
 $usu = $_SESSION['username']; 


//consulta

$consulta = "SELECT us.id ,us.username, us.password, r.roles FROM users as us
 INNER JOIN rols as r ON us.id_rol = r.id_rols";
// Ejecutar la consulta
$resultado = mysqli_query($conn, $consulta);


   

 include "base/header.php";

?>
    <body class="sb-nav-fixed">
       <?php
        include "base/navbar2.php";
       
        include "modal/modal_rigistrador.php";
        
        ?>
       <br>
       <br>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">usuario</h1>
                       
                       <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#Modalregis" style="float: right;">Nuevo Usuario</button>
                            <br>
                            <br>

                        <div class="card mb-4">
                            
                            <div class="card-body">
                         <table id="datatablesSimple" class="table text-center">
                                    <thead class="table-danger"> <!-- Solo usa una clase para el color -->
                                        <tr>
                                            <th>Usuario</th>
                                            <th>Roles</th>
                                            <th>Opción</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                            <tr>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['roles']; ?></td>
                                                <td>
                                                    <div class="d-flex justify-content-center"> <!-- Contenedor para centrar los botones -->
                                                        <form action="config/eliminar.php" method="POST" class="me-2"> <!-- Clase me-2 para margen a la derecha -->
                                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                        <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modaleditar<?php echo $row['id']; ?>" href="">Editar</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php    include "modal/modal_editar.php"; } ?>
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
                <?php
             
                include 'base/footer.php'; ?>
            </div>
        </div>
     <?php include 'base/scrit.php'; ?>
    </body>
</html>
