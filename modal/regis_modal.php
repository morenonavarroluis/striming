<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="config/save_video.php" method="POST" enctype="multipart/form-data">
       
       
        <input type="file"  name="video"  class="form-control mb-3"  placeholder="Seleccionar Video" aria-label="Seleccionar Video">
        <input type="hidden" class="form-control mb-3" placeholder="Fecha y Hora" aria-label="Fecha y Hora">
      



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" name="save" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>