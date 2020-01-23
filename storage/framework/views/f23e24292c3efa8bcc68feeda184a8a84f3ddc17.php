<?php $__env->startSection('seccion'); ?>
  <h1>Motas</h1>
   <?php if(Session('mensaje')): ?>
    <div class="alert alert-success">
        <?php echo e(session('mensaje')); ?>

    </div>
   <?php endif; ?>
    <form action="<?php echo e(route('motas.crear')); ?>" method="POST">
      <?php echo csrf_field(); ?>

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
            La descripcion es obligatoria
        </div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <input type="text" name="nombre"  placeholder="Nombre :" value="<?php echo e(old('nombre')); ?>"  class="form-control mb-2 ">
      <input type="text" name="descripcion" placeholder="Descripcion :" value="<?php echo e(old('descripcion')); ?>" class="form-control mb-2 ">
      <button class="btn btn-primary btn-block" type="submit">Agregar </button>
    </form> 
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $motas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <th scope="row"><?php echo e($item->id); ?></th>
            <td>
                <a href="<?php echo e(route('motas.detalle',$item)); ?>">
                <?php echo e($item->nombre); ?>

                </a>
            </td>
            <td><?php echo e($item->descripcion); ?></td>
            <td>
              <a href="<?php echo e(route('motas.editar', $item)); ?>" class="btn btn-warning btn-sm">Editar</a>

              <form action="<?php echo e(route('motas.eliminar', $item)); ?>" method="POST" class="d-inline">
              <?php echo method_field('DELETE'); ?>
              <?php echo csrf_field(); ?>
              <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
              </form>
            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>

    <?php echo e($motas->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyectos\Laravel\blog\resources\views/welcome.blade.php ENDPATH**/ ?>