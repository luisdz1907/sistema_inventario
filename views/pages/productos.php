<?php
//Obtenemos el valor del id enviado 
$id = isset($_POST["id"]) ? $_POST["id"] : null;

if ($id) {
}
?>
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Página de Productos</h1>

        <div class="card">
            <div class="card-body">
                <a href="crear-producto" class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i>
                    Agregar Producto
                </a>

                <div class="table-responsive">
                    <table id="tabla" class="table">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">#</th>
                                <th class="text-center" scope="col">Nombre</th>
                                <th class="text-center" scope="col">Precio Costo</th>
                                <th class="text-center" scope="col">Precio Venta</th>
                                <th class="text-center" scope="col">Iva</th>
                                <th class="text-center" scope="col">Categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php
                            $listProductos = ProductoController::listaProductos();
                            phpinfo();
                            foreach ($listProductos as $row) :
                            ?>

                                <tr>
                                    <td class="text-center">
                                        <?php echo $row["id"] ?>
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


</main>