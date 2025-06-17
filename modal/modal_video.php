<!-- Modal -->
<div class="modal fade" id="Modalvideo<?php echo $fetch['video_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
       
    
    
       
        <form action="config/editar_video.php" method="post">
            
            <input type="hidden" name="id" value="<?php echo $fetch['video_id']; ?>">
            
            <label for="">Nombre del video</label>
            <input type="text" class="form-control" name="name" value="<?php echo $fetch['video_name']; ?>" required><br>
          
            <label for="">Fecha</label>
            <input type="date" class="form-control" name="fecha" value="<?php echo $fetch['fecha']; ?>" required><br>
          
          
        

     


      </div>
      <div class="modal-footer justify-content-center ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>