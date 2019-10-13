<?php $__env->startSection('title', 'Edit Product'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
    Edit Product
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
    <form method="post" action="<?php echo e(route('products.update', $product->id)); ?>">
      <div class="form-group">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo e($product->nome); ?>" />
      </div>
      <div class="form-group">
        <label for="descricao">Descrição do Produto:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo e($product->descricao); ?>" />
      </div>
      <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" name="preco" value="<?php echo e($product->preco); ?>" />
      </div>
      <div class="form-group">
        <label for="tipo">Tipo:</label>
        <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo e($product->tipo); ?>" />
      </div>
      <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product/edit.blade.php ENDPATH**/ ?>