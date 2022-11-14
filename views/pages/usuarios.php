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
                                <th class="text-center" scope="col">Usuario</th>
                                <th class="text-center" scope="col">Perfil</th>
                                <th class="text-center" scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $listUsuarios = UsuarioController::listaUsuarios();
                             foreach ($listUsuarios as $row): 
                             ?>
                                <td class="text-center"><?php echo $row["id"] ?></td>
                                <td class="text-center"><?php echo $row["nombre"] ?></td>
                                <td class="text-center"><?php echo $row["usuario"] ?></td>
                                <td class="text-center"><?php echo $row["perfil"] ?></td>
                                <td class="text-center">
                                    <button class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button>
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

