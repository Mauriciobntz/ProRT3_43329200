 <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="card col-lg-6 col-md-8 col-sm-12">
                <div class="card-header text-center">
                    <h4>Iniciar sesión</h4>
                </div>
                <!-- Mensaje de Error -->
                <?php if (session()->getFlashdata('msg')): ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input name="email" type="text" class="form-control" placeholder="Correo" id="email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input name="pass" type="password" class="form-control" placeholder="Contraseña" id="pass">
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                        <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
                        <br><span>¿Aún no se registró? <a href="<?php echo base_url('/sign_in'); ?>">Registrarse aquí</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>