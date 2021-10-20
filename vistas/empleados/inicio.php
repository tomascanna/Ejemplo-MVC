
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($empleados as $empleado) { ?>
            <tr>
                <td><?= $empleado->id ?></td>
                <td><?= $empleado->nombre ?></td>
                <td><?= $empleado->correo ?></td>
                <td>
                    <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=editar&id=<?= $empleado->id ?>" role="button">Editar</a>
                    <a name="" id="" class="btn btn-danger" href="?controlador=empleados&accion=borrar&id=<?= $empleado->id ?>" role="button">Borrar</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a name="" id="" class="btn btn-primary" href="?controlador=empleados&accion=crear" role="button">Agregar Empleado</a>