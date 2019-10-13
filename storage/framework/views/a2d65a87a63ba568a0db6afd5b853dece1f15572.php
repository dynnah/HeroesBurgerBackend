<?php $__env->startSection('title', 'Product'); ?>

<?php $__env->startSection('content'); ?>
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
   <tr>
      <td><?php echo e($product->id); ?></td>
      <td><?php echo e($product->nome); ?></td>
      <td><?php echo e($product->descricao); ?></td>
      <td><?php echo e($product->preco); ?></td>
      <td><?php echo e($product->tipo); ?></td>
      </tr>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product/show.blade.php ENDPATH**/ ?>