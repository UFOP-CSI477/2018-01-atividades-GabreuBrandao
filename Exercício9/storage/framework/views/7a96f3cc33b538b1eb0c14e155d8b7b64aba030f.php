<?php $__env->startSection('conteudo'); ?>
	
	<h1>Inserir estado</h1>

	<form method="post" action="<?php echo e(route('estados.store')); ?>">
		
		<?php echo csrf_field(); ?>

		<p>Nome: <input type="text" name="nome"></p>
		<p>Sigla: <input type="text" name="sigla"></p>

		<input type="submit" name="btnIncluir" value="Incluir">

	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>