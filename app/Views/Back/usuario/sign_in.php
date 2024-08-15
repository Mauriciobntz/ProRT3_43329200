<div class="container mt-0 mb-0">
    <div class="card-header text-justify">
        <div class="row d-flex justify-content-center">
            <div class="card col-lg-3" style="width: 50%;">
                <div class="card-header text-center">
                <h4 >Registrarse</h4>
                </div>
                <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                    <?= csrf_field(); ?>
                    <?php if (!empty(session()->getFlashdata('fail'))): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('success'))): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif; ?>
                    <div class="card-body justify-content-center">
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="nombre">
                            <?php if ($validation->getError('nombre')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('nombre'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="apellido">
                            <?php if ($validation->getError('apellido')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('apellido'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="correo@algo.com">
                            <?php if ($validation->getError('email')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="text" name="username" class="form-control" placeholder="usuario">
                            <?php if ($validation->getError('usuario')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('usuario'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input name="pass" type="password" class="form-control" placeholder="password">
                            <?php if ($validation->getError('pass')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $validation->getError('pass'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- Puedes agregar el botón de enviar sin tocar el controlador -->
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>