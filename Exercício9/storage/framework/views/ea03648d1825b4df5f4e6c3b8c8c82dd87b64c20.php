<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema Acadêmico</title>
	<link rel="stylesheet" href = " <?php echo e(asset('css/app.css')); ?> ">
</head>
<body>

	<!-- FLASH: mensagen -->
	<?php if( Session::has('mensagem') ): ?>
		<p class="alert alert-info"><?php echo e(Session::get('mensagem')); ?></p>
	<?php endif; ?>

	<!-- Usuario autenticado -->
	<?php if( Auth::check() ): ?> <!-- Se está autenticado -->
		<nav class="navbar navbar-light bg-secondary">
			<span class="text-white">
				Usuário: <?php echo e(Auth::user()->name); ?>


				<?php if( Auth::user()->type == 1 ): ?>

					Administrador do Sistema

				<?php else: ?>

					Usuário

				<?php endif; ?>	
			</span>
		</nav>

	<?php endif; ?>


	<!--LINKS-->
	<a href="/estados">Estados</a>
	<a href="<?php echo e(route('cidades.index')); ?>">Cidades</a>
	<a href="<?php echo e(route('alunos.index')); ?>">Alunos</a>
	<a href="#">Turmas</a>
	<a href="#">Notas</a>

	<!--CONTEÚDO-->
	<?php echo $__env->yieldContent('conteudo'); ?>

</body>
</html>