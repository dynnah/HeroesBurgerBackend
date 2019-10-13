<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>
<?php if(session()->get('success')): ?>
<div class="alert alert-success">
 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
<?php endif; ?>
<div class="table-responsive">
<table class="table table-sm table-hover">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Preço</th>
      <th>Tipo</th>
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
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product/index-user.blade.php ENDPATH**/ ?>