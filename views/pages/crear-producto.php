<main class="content">
    <div class="container-fluid p-0">
        <div style="margin: 0 auto ;" class="card w-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <a class="row-left-i" href="productos"><i class="fa-solid fa-arrow-left"></i></a>
                    <h1 class="text-uppercase">Crear Prodcuto</h1>
                    <b></b>
                </div>
                <form role="form" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="nombre_producto" class="form-label">Nombre Producto</label>
                                <input type="text" class="form-control" name="nombre_producto" id="nombre_producto">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="precio_costo" class="form-label">Precio Costo</label>
                                <input type="number" min="1" class="form-control" name="precio_costo" id="precio_costo">
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="precio_venta" class="form-label">Precio Venta</label>
                                <input type="number" min="1" class="form-control" name="precio_venta" id="precio_venta">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="iva" class="form-label">Iva</label>
                                <input type="number" min="1" class="form-control" name="iva" id="iva">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label for="id_categoria" class="form-label">Seleccione la categoria</label>
                            <select class="form-select" name="id_categoria">
                                <option selected="true" disabled="disabled">Tipo documento</option>
                            <?php
                            $categoriasList = CategoriaController::listaCategoria();
                            foreach ($categoriasList as $row) : ?>
                                <option value="<?php echo $row["id"] ?>"><?php echo $row["nombre_categoria"] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        
                    </div>
                    
                    <div class="container d-flex justify-content-center mt-3 align-items-center flex-column">
                        <button type="submit" class="btn btn-success w-100 mb-2">Crear Usuario</button>
                    </div>
                    <?php
                    $crearProducto = new ProductoController();
                    $crearProducto->crearProducto();
                    ?>
                </form>
            </div>
        </div>

    </div>
</main>