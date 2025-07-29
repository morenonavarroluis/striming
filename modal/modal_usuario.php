<!-- Modal -->
<div class="modal fade" id="Modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <?php 
         $persona = "SELECT * FROM personas";
         $personas_result = mysqli_query($conn, $persona);
        
           
         
      ?>
    
      <form action="config/registroUsuario" method="POST">
        <input type="text" class="form-control" placeholder="Nombre de usuario" aria-label="Username" aria-describedby="basic-addon1" name="username" required>
        <input type="password" class="form-control mt-2" placeholder="Contraseña" aria-label="Password" aria-describedby="basic-addon1" name="password" required>
        
        <select class="form-select mt-2" aria-label="Default select example" name="persona" required>
        
        <option selected>persona</option>
        <?php while ($row = mysqli_fetch_assoc($personas_result)) { ?>
          <option value="<?php echo $row['id_persona']; ?>"><?php echo $row['nombre'] . "  " . $row['apellido'];?></option>
        
        <?php } ?>
        </select>
        <select class="form-select mt-2" aria-label="Default select example" name="rol" required>
          <option selected>Seleccionar rol</option>
          <option value="1">Administrador</option>
          <option value="2">Editor</option>
           <option value="3">Consultor</option>
            <option value="4">Registrador</option>
        </select>
      


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>