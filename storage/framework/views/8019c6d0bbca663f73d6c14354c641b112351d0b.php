<?php echo $__env->make('helper.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('helper.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Content Wrapper START -->
<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Usuario</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Configuración</a>
                                    <span class="breadcrumb-item active">Crear Usuario</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Crear Usuario</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                    <form method="POST" action="<?php echo e(route('register')); ?>" aria-label="<?php echo e(__('Register')); ?>">
                                        <?php echo csrf_field(); ?>
                                    <div class="form-group row">
                                                <label class="col-sm-2 col-form-label control-label">Nombre *</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Requerido *" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label control-label">Usuario *</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Requerido *" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label control-label">Contraseña *</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Requerido *" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label control-label">Confirmar Contraseña *</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Requerido *" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-gradient-success">Guardar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
                <!-- Content Wrapper END -->
                <?php echo $__env->make('helper.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>