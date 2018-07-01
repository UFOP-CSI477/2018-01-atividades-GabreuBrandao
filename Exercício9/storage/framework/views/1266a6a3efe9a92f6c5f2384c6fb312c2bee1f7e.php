<?php $__env->startSection('conteudo'); ?>

<h1>Cidades</h1>

<a href="<?php echo e(route('cidades.create')); ?>">Inserir</a>

<table class="table table-striped">

    <tr>
        <th>Nome</th>
        <th>Estado</th>
        <th>Exibir</th>
        <th>Editar</th>
    </tr>

    <?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($c->nome); ?></td>
            <td><?php echo e($c->estado->nome); ?>-<?php echo e($c->estado->sigla); ?></td>
            <td><a href="<?php echo e(route('cidades.show', $c->id)); ?>">Exibir</a>
            <td><a href="<?php echo e(route('cidades.edit', $c->id)); ?>">Editar</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>