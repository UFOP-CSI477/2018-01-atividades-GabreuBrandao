<?php $__env->startSection('conteudo'); ?>

<h1>Alunos</h1>

<a href="<?php echo e(route('alunos.create')); ?>">Inserir</a>

<table class="table table-striped">

    <tr>
        <th>Nome</th>
        <th>CEP</th>
        <th>Cidade</th>
        <th>Exibir</th>
        <th>Editar</th>
    </tr>

    <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($a->nome); ?></td>
            <td><?php echo e($a->cep); ?></td>
            <td><?php echo e($a->cidade->nome); ?></td>
            <td><a href="<?php echo e(route('alunos.show', $a->id)); ?>">Exibir</a>
            <td><a href="<?php echo e(route('alunos.edit', $a->id)); ?>">Editar</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>