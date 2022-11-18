<main class="content">
    <h1 class="h3 mb-3">Página de categorias</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="card w-100">
                <div class="card-body">
                    <div>
                        <h1 class="text-uppercase text-center fs-3">Crear Categoria</h1>
                    </div>
                    <form role="form" method="POST">
                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="nombre_categoria" id="nombre">
                                </div>
                            </div>
                        </div>

                        <div class="container d-flex justify-content-center mt-3 align-items-center flex-column">
                            <button type="submit" class="btn btn-success w-75 mb-2">Agregar categoria</button>
                        </div>

                        <?php
                        $categoria = new categoriaController();
                        $categoria->crearCategoria();
                        ?>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabla" class="table">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">Nombre</th>
                                    <th class="text-center" scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $categoriasList = CategoriaController::listaCategoria();
                                foreach ($categoriasList as $row) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo $row["id"] ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row["nombre_categoria"] ?>
                                        </td>
                                        <td class="text-center">
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
    </div>

</main>