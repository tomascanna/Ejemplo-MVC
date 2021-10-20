<div class="card">
    <div class="card-header">
        Agregar Empleado
    </div>
    <div class="card-body">
        <form method="post">
            <div class="mb-3">
              <label for="" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Nombre" value="<?=$empleado->nombre?>">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Correo</label>
              <input type="email" class="form-control" name="correo" id="" aria-describedby="helpId" placeholder="Email" value="<?=$empleado->correo?>">
            </div>
            <input type="hidden" name="id" value="<?=$empleado->id?>">
            <input name="" id="" class="btn btn-success" type="submit" value="Editar Empleado">
        </form>
    </div>
</div>