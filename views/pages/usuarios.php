<?php
//Obtenemos el valor del id enviado 
$id = $_POST["id"];
if ($id) {
    $usuarioId = UsuarioController::eliminarUsuario($id);
}
?>
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Página de Usuarios</h1>

        <div class="card">
            <div class="card-body">
                <a href="crear-usuario" class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i>
                    Agregar usuario
                </a>

                <div class="table-responsive">
                    <table id="tabla" class="table">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">#</th>
                                <th class="text-center" scope="col">Nombre</th>
                                <th class="text-center" scope="col">Tipo Documento</th>
                                <th class="text-center" scope="col">Numero Documento</th>
                                <th class="text-center" scope="col">Fecha Nacimiento</th>
                                <th class="text-center" scope="col">Ciudad</th>
                                <th class="text-center" scope="col">Celular</th>
                                <th class="text-center" scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $listUsuarios = UsuarioController::listaUsuarios();
                            foreach ($listUsuarios as $row):
                            ?>
                            <td class="text-center">
                                <?php echo $row["id"] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $row["nombre"] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $row["tipo_documento"] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $row["nro_documento"] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $row["fecha_nacimiento"] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $row["ciudad_residencia"] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $row["celular"] ?>
                            </td>
                            <td class="text-center d-flex">

                                <a style="margin-right: 2px ;" class="btn btn-success" 
                                href="actualizar-usuario?id=<?php echo $row["id"] ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></a>

                                <form method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


</main>