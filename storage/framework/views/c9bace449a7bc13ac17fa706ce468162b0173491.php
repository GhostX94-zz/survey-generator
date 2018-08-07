<?php echo $__env->make('helper.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('helper.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="main-content">
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Ver Usuarios</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Configuración</a>
                                    <span class="breadcrumb-item active">Ver Usuarios</span>
                                </nav>
                            </div>
                        </div>
<div class="card">
    <div class="card-header border bottom">
        </div>
        <div class="card-body">
             <table class="table">
            <thead>
             <tr>
             <th scope="col">#</th>
             <th scope="col">Nombre</th>
             <th scope="col">Correo Electrónico</th>
             <th scope="col">Editar</th>
             <th scope="col">Eliminar</th>
        </tr>
        </thead>
           <tbody>
           <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row"><?php echo e($item->id); ?></th>
          <td><?php echo e($item->name); ?></td>
          <td><?php echo e($item->email); ?></td>
          <td><input type="button"  value="Editar" class="btn btn-warning" /></td>
          <td><input type="button"  value="Eliminar" class="btn btn-danger" /></td>
       </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
       </table>
       </div>
    </div>
    </div>
    </div>
<?php echo $__env->make('helper.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
