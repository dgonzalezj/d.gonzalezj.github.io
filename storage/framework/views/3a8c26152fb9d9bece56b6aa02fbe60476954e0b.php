<?php $__env->startSection('seccion'); ?>
<h1>Detalle de mota: </h1>
<h4>Id: <?php echo e($mota->id); ?></h4>
<h4>Nombre: <?php echo e($mota->nombre); ?></h4>
<h4>Detalle: <?php echo e($mota->descripcion); ?></h4>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyectos\Laravel\blog\resources\views/motas/detalle.blade.php ENDPATH**/ ?>