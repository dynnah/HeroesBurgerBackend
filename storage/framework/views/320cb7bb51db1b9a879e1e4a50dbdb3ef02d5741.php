<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>
<?php if(session()->get('success')): ?>
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo e(session('success')); ?></strong>
</div>
<?php endif; ?>
<div class="table-responsive">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Preço (R$)</th>
      <th>Tipo</th>
      <th>Action</th>
      <th colspan="2"><a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary" role="button">Create Product</a></th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($product->id); ?></td>
      <td><?php echo e($product->nome); ?></td>
      <td><?php echo e($product->descricao); ?></td>
      <td><?php echo e($product->preco); ?></td>
      <td><?php echo e($product->tipo); ?></td>
      <td><a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-primary" role="button">Show Product</a></td>
      <td><a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-primary" role="button">Edit</a></td>
      <td colspan="2">
        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
<!-- <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary" role="button">Add Product</a> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product/index.blade.php ENDPATH**/ ?>