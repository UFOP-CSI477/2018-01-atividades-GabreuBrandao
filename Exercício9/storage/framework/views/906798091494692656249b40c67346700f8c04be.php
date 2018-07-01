<?php $__env->startSection('conteudo'); ?>

	<h1>Dados do Estado</h1>

	<p>Código: <?php echo e($estado->id); ?></p>
	<p>Nome: <?php echo e($estado->nome); ?></p>
	<p>Sigla: <?php echo e($estado->sigla); ?></p>

	<a href="/estados">Voltar</a>
	<a href="<?php echo e(route('estados.edit', $estado->id)); ?>">Editar</a>
	
	<form method="post" onsubmit="return confirm('Confirma exclusão do estado?');" action="<?php echo e(route('estados.destroy', $estado->id)); ?>">  <!--EXLCUIR-->

		<?php echo csrf_field(); ?>
		<?php echo method_field('DELETE'); ?>

		<input type="submit" value="Exlcuir">

	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>