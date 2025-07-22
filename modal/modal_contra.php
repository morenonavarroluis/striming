<!-- Modal -->
<div class="modal fade" id="Modalcontra<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
       
    
    
       
        <form action="config/pass_user" method="post">
            
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
         
            <input type="text" class="form-control" name="password" placeholder="nueva contraseña" ><br>
          
          
          
          
     


      </div>
      <div class="modal-footer justify-content-center ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>