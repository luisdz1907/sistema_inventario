<main class="content">
    <div class="container-fluid p-0">
        <div style="margin: 0 auto ;" class="card w-75">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <a class="row-left-i" href="usuarios"><i class="fa-solid fa-arrow-left"></i></a>
                    <h1 class="text-uppercase">Permisos</h1>
                    <b></b>
                </div>
                <form role="form" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre y apellidos</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="nro_documento" class="form-label">Seleccione tipo de documento</label>
                            <select class="form-select" name="tipo_documento">
                                <option selected="true" disabled="disabled">Tipo documento</option>
                                <option value="cedula">C.C</option>
                            </select>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="nro_documento" class="form-label">Documento</label>
                                <input type="text" class="form-control" name="nro_documento"
                                    id="nro_documento">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="celular" class="form-label">Numero de celular</label>
                                <input type="text" min="1" class="form-control" name="celular" id="celular">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input type="text" class="form-control" name="direccion" id="direccion">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="ciudad_residencia" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" name="ciudad_residencia" id="ciudad_residencia">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Seleccionar foto de perfil</label>
                                <input type="file" class="form-control" name="imagen" id="imagen"
                                    accept="image/jpeg, image/png, image/jpg">
                                <p class="help-block fs-5">Peso máximo de la foto 10MB</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- 
                    <div class="row">
                        <div class="col-lg-12">
                            <select class="form-select" name="perfil">
                                <option selected="true" disabled="disabled">Perfil</option>
                                <option value="administrador">Administrador</option>
                                <option value="vendedor">Vendedor</option>
                            </select>
                        </div>
                    </div> -->

                    <div class="container d-flex justify-content-center mt-3 align-items-center flex-column">
                        <button type="submit" class="btn btn-success w-100 mb-2">Crear Usuario</button>
                    </div>

                    <?php
                    $crearUsuario = new UsuarioController();
                    $crearUsuario->crearUsuario();
                    ?>
                </form>
            </div>
        </div>

    </div>
</main>