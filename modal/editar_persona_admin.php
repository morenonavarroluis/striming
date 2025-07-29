<!-- Modal -->
<div class="modal fade" id="Modalpersonaadmineditar<?php echo $row['id_persona']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Personas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
    
      <form action="config/editar_persona_admin" method="POST">

        <input type="hidden" name="id_persona" value="<?php echo $row['id_persona']; ?>">

        <label for="">Nombre</label>
        <input type="text" class="form-control" value="<?php echo $row['nombre']; ?>" aria-label="Username" aria-describedby="basic-addon1" name="nombre" required>
        <br>

        <label for="">Apellido</label>
        <input type="text" class="form-control mt-2" value="<?php echo $row['apellido']; ?>" aria-label="Password" aria-describedby="basic-addon1" name="apellido" required>
        <br>

        <label for="">Cedula</label>
        <input type="text" class="form-control mt-2" value="<?php echo $row['cedula']; ?>" aria-label="Password" aria-describedby="basic-addon1" name="cedula" required>
        <br>

        <label for="">Cargo</label>
        <input type="text" class="form-control mt-2" value="<?php echo $row['cargo']; ?>" aria-label="Password" aria-describedby="basic-addon1" name="cargo" required>
       <br>

       <label for="">Gerencia</label>
        <input type="text" class="form-control mt-2" value="<?php echo $row['gerencia']; ?>" aria-label="Password" aria-describedby="basic-addon1" name="gerencia" required>
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>