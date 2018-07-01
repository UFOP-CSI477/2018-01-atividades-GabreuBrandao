<?php $__env->startSection('conteudo'); ?>

	<a href="<?php echo e(route('estados.create')); ?>">Inserir estado</a>
	<!-- OUTRA OPÇÃO <a href="/estados/create/">Inserir estado</a> -->

	<table>

		<tr>
			<th>Código</th>
			<th>Estado</th>
			<th>Sigla</th>
			<th>Ação</th>
		</tr>

		<?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<tr>
			<td><?php echo e($e->id); ?></td>
			<td><?php echo e($e->nome); ?></td>
			<td><?php echo e($e->sigla); ?></td>
			<td><a href="/estados/<?php echo e($e->id); ?>">Exibir</a></td>
		</tr>	

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>