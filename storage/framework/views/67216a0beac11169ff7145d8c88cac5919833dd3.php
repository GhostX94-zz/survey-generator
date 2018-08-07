
            
            <?php echo $__env->make('helper.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('helper.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Page Container START -->
            <!--<div class="page-container">
            </div>-->
                <?php echo $__env->make('encuesta.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            
            
            <!-- Page Container END -->
            <?php echo $__env->make('helper.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     