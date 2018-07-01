<?php $__env->startSection('conteudo'); ?>

    <h1>Editar aluno</h1>

    <a href="<?php echo e(route('alunos.index')); ?>">Voltar</a>

    <form method="post" action="<?php echo e(route('alunos.update', $aluno->id)); ?>">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>

        Nome: <input type="text" name="nome" value="<?php echo e($aluno->nome); ?>"> <br>
        CEP: <input type="text" name="cep" value="<?php echo e($aluno->cep); ?>"> <br>
        Cidade:

        <select name="cidade_id">
          <option value="">Selecione:</option>
          <!-- Dados dos estados //-->
          <?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($c->id); ?>"
                <?php if( $c->id == $aluno->cidade_id ): ?>
                    selected
                <?php endif; ?>
              ><?php echo e($c->nome); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>


       <input type="submit" name="btnSalvar" value="Salvar">

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>