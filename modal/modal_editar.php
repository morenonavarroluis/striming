<!-- Modal -->
<div class="modal fade" id="Modaleditar<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
       
    
    
       
        <form action="config/editar" method="post">
            
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <label for="">Usuario</label>
            <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>"><br>
          
          
          
           <label for="">Roles</label>
            <select class="form-select mt-2" aria-label="Default select example" name="rol" required>
            <option value="<?php echo $row['roles']; ?>" >Seleccione una opción</option>
            <option value="2">Editor</option>
            <option value="3">Consultor</option>
            <option value="4">Seguridad</option>
           </select>
     


      </div>
      <div class="modal-footer justify-content-center ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>