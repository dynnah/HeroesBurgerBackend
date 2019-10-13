<?php $__env->startSection('title', 'Create Product'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
    Add Product
  </div>
  <div class="card-body">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
    <?php endif; ?>
    <form method="post" action="<?php echo e(route('products.store')); ?>">
      <div class="form-group">
        <?php echo csrf_field(); ?>
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" />
      </div>
      <div class="form-group">
        <label for="descricao">Descrição do Produto:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" />
      </div>
      <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" name="preco" />
      </div>
      <div class="form-group">
        <label for="tipo">Tipo do Produto:</label>
        <input type="text" class="form-control" id="tipo" name="tipo" />
      </div>
      <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product/create.blade.php ENDPATH**/ ?>