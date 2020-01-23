<?php $__env->startSection('seccion'); ?>
    <h1>Este es mi equipo de trabajo:</h1>

    <?php $__currentLoopData = $equipo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('nosotros',$item)); ?>" class="h4 text-danger"><?php echo e($item); ?></a> </br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if(!empty($nombre)): ?>
        
        <?php switch($nombre):
            case ($nombre=='Seba'): ?>
                <h2 class="mt-5">El nombre es <?php echo e($nombre); ?>:</h2>
                <p><?php echo e($nombre); ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis vitae quam sed felis imperdiet tempus. Fusce non suscipit tortor,
                quis bibendum justo. Ut imperdiet tempor felis. Curabitur pretium,
                dolor vel sodales imperdiet, nisl ligula porttitor nisl, non fin
                Suspendisse sodales vehicula nisi, non efficitur leo congue posuere.</p>
            <?php break; ?>

            <?php case ($nombre=='Diego'): ?>
                <h2 class="mt-5">El nombre es <?php echo e($nombre); ?>:</h2>
                <p><?php echo e($nombre); ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis vitae quam sed felis imperdiet tempus. Fusce non suscipit tortor,
                quis bibendum justo. Ut imperdiet tempor felis. Curabitur pretium,
                dolor vel sodales imperdiet, nisl ligula porttitor nisl, non fin
                Suspendisse sodales vehicula nisi, non efficitur leo congue posuere.</p>
            <?php break; ?>

            <?php case ($nombre=='Juanito'): ?>
                <h2 class="mt-5">El nombre es <?php echo e($nombre); ?>:</h2>
                <p><?php echo e($nombre); ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis vitae quam sed felis imperdiet tempus. Fusce non suscipit tortor,
                quis bibendum justo. Ut imperdiet tempor felis. Curabitur pretium,
                dolor vel sodales imperdiet, nisl ligula porttitor nisl, non fin
                Suspendisse sodales vehicula nisi, non efficitur leo congue posuere.</p>
            <?php break; ?>
        <?php endswitch; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyectos\Laravel\blog\resources\views/nosotros.blade.php ENDPATH**/ ?>