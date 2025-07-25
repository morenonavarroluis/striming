<?php
 
include "config/conexion.php";

            session_start();

            if (!isset($_SESSION['id_rol'])) {
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
                    
                       
                       <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#Modalregistro" style="float: right; margin:0px 30px 0px 0px;">Nuevo Usuario</button>
                            <br>
                            <br>
    <div class="conta">
        <h2>Usuarios</h2>

        <div class="controls">
            <input type="text" id="searchInput" placeholder="Buscar productos...">
            <select id="rowsPerPage">
                <option value="5">5 por página</option>
                <option value="10">10 por página</option>
                <option value="20">20 por página</option>
            </select>
        </div>

                <table id="myTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>roles</th>
                        <th  class="d-flex justify-content-center">accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php   while ($row = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['roles']; ?></td>
                        <td class="d-flex justify-content-center">
                            <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#Modaleditar<?php echo $row['id']; ?>">Editar</button>
                            <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#Modaladmin<?php echo $row['id']; ?>">cambiar contraseña</button>
                            <form action="config/eliminar" method="POST" class="me-2">
                               <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                               <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?php  
                           include "modal/modal_editar_admin.php"; 
                           include "modal/modal_contra_admin.php";
                    } ?>
                                          
                    </tbody>
            </table>

        <div class="pagination">
            <button id="prevBtn">Anterior</button>
            <span id="pageNumbers"></span>
            <button id="nextBtn">Siguiente</button>
        </div>
    </div>
                        
                    
                </main>

                <?php include 'base/footer.php';
                include 'base/scrit.php';
                
                ?>
            </div>
        </div>

     <script src="js/tablas.js"> </script>
    </body>
</html>
