<?php $__env->startSection('conteudo'); ?>

    <h1>Inserir cidade</h1>

    <a href="<?php echo e(route('cidades.index')); ?>">Voltar</a>

    <form method="post" action="<?php echo e(url('/cidades')); ?>">

        <?php echo csrf_field(); ?>

        Nome: <input type="text" name="nome"> <br>
        Estado:
          <!-- <input type="text" name="estado_id"> <br> //-->
          <select name="estado_id">
            <option value="">Selecione:</option>
            <!-- Dados dos estados //-->
            <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($e->id); ?>"><?php echo e($e->nome); ?>-<?php echo e($e->sigla); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          
        <input type="submit" name="btnSalvar" value="Salvar">

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>