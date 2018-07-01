<?php $__env->startSection('conteudo'); ?>

<h1>Dados do aluno</h1>

<p>Código: <?php echo e($aluno->id); ?></p>
<p>Nome: <?php echo e($aluno->nome); ?></p>
<p>Nome: <?php echo e($aluno->cep); ?></p>

<p>Cidade: <?php echo e($aluno->cidade->nome); ?></p>

<a href="<?php echo e(route('alunos.index')); ?>">Voltar</a>
<a href="<?php echo e(route('alunos.edit', $aluno->id)); ?>">Editar</a>

<form method="post" onsubmit="return confirm('Confirma exclusão do aluno?');" action="<?php echo e(route('alunos.destroy', $aluno->id)); ?>">

  	<?php echo csrf_field(); ?>
 	<?php echo method_field('DELETE'); ?>
  	<input type="submit" value="Excluir">

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>