<?php $__env->startSection('conteudo'); ?>

<h1>Dados da cidade</h1>

<p>Código: <?php echo e($cidade->id); ?></p>
<p>Nome: <?php echo e($cidade->nome); ?></p>

<p>Estado: <?php echo e($cidade->estado->nome); ?></p>

<a href="<?php echo e(route('cidades.index')); ?>">Voltar</a>
<a href="<?php echo e(route('cidades.edit', $cidade->id)); ?>">Editar</a>

<form method="post" onsubmit="return confirm('Confirma exclusão da cidade?');" action="<?php echo e(route('cidades.destroy', $cidade->id)); ?>">

  	<?php echo csrf_field(); ?>
 	<?php echo method_field('DELETE'); ?>
  	<input type="submit" value="Excluir">

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>