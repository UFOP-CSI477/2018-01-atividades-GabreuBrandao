<?php $__env->startSection('conteudo'); ?>
	
	<h1>Atualizar estado - <?php echo e($estado->id); ?></h1>

	<form method="post" action="<?php echo e(route('estados.update', $estado->id)); ?>">
		
		<?php echo csrf_field(); ?>

		<?php echo method_field('PATCH'); ?>

		<p>Nome: <input type="text" name="nome" value="<?php echo e($estado->nome); ?>"></p>
		<p>Sigla: <input type="text" name="sigla" value="<?php echo e($estado->sigla); ?>"></p>

		<input type="submit" name="btnAtualizar" value="Atualizar">

	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>