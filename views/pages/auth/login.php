<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h1 fs-1 mb-2">Inicia Sesión</h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="assets/img/login_icon.png" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
                                </div>
                                <!-- FORMULARIO DE LOGIN -->
                                <form method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Usuario</label>
                                        <input class="form-control form-control-lg" type="text" name="username" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Contraseña</label>
                                        <input class="form-control form-control-lg" type="password" name="password" />

                                    </div>
                                    <div class="text-center mt-3">
                                        <button class="btn btn-lg btn-primary">Entrar</button>
                                    </div>

                                    <?php
                                        $login = new UsuarioController();
                                        $login->loginUsuario();
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>