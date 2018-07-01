<?php $__env->startSection('conteudo'); ?>

    <h1>Inserir Aluno</h1>

    <a href="<?php echo e(route('alunos.index')); ?>">Voltar</a>

    <form method="post" action="<?php echo e(url('/alunos')); ?>">

        <?php echo csrf_field(); ?>

        Nome: <input type="text" name="nome"> <br>
        CEP: <input type="text" name="cep"> <br>

        Cidade:
          <!-- <input type="text" name="estado_id"> <br> //-->
          <select name="cidade_id">
            <option value="">Selecione:</option>
            <!-- Dados dos estados //-->
            <?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($a->id); ?>"><?php echo e($a->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          
        <input type="submit" name="btnSalvar" value="Salvar">

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>