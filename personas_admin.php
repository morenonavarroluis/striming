<?php
 
include "config/conexion.php";

            session_start();

            if (!isset($_SESSION['id_rol'])) {
                header("Location: login.php");
                exit();

            }


 $id = $_SESSION['id']; 



//consulta

$consulta = "SELECT id_persona, nombre,  apellido, cedula, cargo , gerencia   FROM personas";
$resultado = mysqli_query($conn, $consulta);


   

 include "base/header.php";

?>
    <body class="sb-nav-fixed">
       <?php
        include "base/navbar.php";
       
        include "modal/modal_persona_admin.php";
        ?>
       <br>
       <br>
            <div id="layoutSidenav_content">
                <main>
                    
                       
                       <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#Modalpersonaadmin" style="float: right; margin:0px 30px 0px 0px;">Nuevo Usuario</button>
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
                        <th>Nombre y Apellido</th>
                        <th>Cedula</th>
                        <th>Cargo</th>
                        <th>Gerencia</th>
                        <th >accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php   while ($row = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        
                        <td><?php echo $row['nombre']. " " . $row['apellido']; ?></td>
                        <td><?php echo $row['cedula']; ?></td>
                        <td><?php echo $row['cargo']; ?></td>
                        <td><?php echo $row['gerencia']; ?></td>
                        <td>
                            <!-- Example split danger button -->
                                  <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually">opcion</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Modalpersonaadmineditar<?php echo $row['id_persona']; ?>" href="#">Editar</a></li>
                                            <form action="config/eliminar_persona" method="POST">
                                                <input type="hidden" name="id_persona" value="<?php echo $row['id_persona']; ?>">
                                                <li><button type="submit" class="dropdown-item">Eliminar</button></li>
                                            </form>
                                            <li><a class="dropdown-item" href="#">Ver</a></li>
                                        </ul>
                                    </div>
                        </td>
                    </tr>
                    <?php  
                            include "modal/editar_persona_admin.php";
                    } 
                    
                    ?>
                                          
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
