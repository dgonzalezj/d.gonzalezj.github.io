<?php $__env->startSection('seccion'); ?>
<h1>Editar mota <?php echo e($mota->id); ?></h1>
    <form action="<?php echo e(route('motas.update',$mota->id)); ?>" method="POST">
      <?php echo method_field('PUT'); ?>  
      <?php echo csrf_field(); ?>
      <?php if(Session('mensaje')): ?>
        <div class="alert alert-success">
        <?php echo e(session('mensaje')); ?>

         </div>
      <?php endif; ?>  
      <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger">
            El nombre es obligatorio
        </div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger">
            La descripcion es obligatorio
        </div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <input type="text" name="nombre"  placeholder="Nombre :" value="<?php echo e($mota->nombre); ?>"  class="form-control mb-2 ">

      <input type="text" name="descripcion" placeholder="Descripcion :" value="<?php echo e($mota->descripcion); ?>" class="form-control mb-2 ">

      <button class="btn btn-warning btn-block" type="submit">Editar </button>
    </form> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyectos\Laravel\blog\resources\views/motas/editar.blade.php ENDPATH**/ ?>