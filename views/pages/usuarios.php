<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Página de Usuarios</h1>

        <div class="card">
            <div class="card-body">
                <a href="crear-usuario"  class="btn btn-primary">
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $listUsuarios = UsuarioController::listaUsuarios();
                             foreach ($listUsuarios as $row): 
                             ?>
                                <td class="text-center"><?php echo $row["id"] ?></td>
                                <td class="text-center"><?php echo $row["nombre"] ?></td>
                                <td class="text-center"><?php echo $row["tipo_documento"] ?></td>
                                <td class="text-center"><?php echo $row["nro_documento"] ?></td>
                                <td class="text-center"><?php echo $row["fecha_nacimiento"] ?></td>
                                <td class="text-center"><?php echo $row["ciudad_residencia"] ?></td>
                                <td class="text-center"><?php echo $row["celular"] ?></td>
                                <td class="text-center">
                                    <a class="btn btn-success" href="actualizar-usuario"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    

</main>

