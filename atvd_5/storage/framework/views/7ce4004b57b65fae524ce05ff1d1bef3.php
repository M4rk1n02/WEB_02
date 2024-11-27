<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="my-4">Detalhes da Categoria</h1>

    <div class="card">
        <div class="card-header">
            Categoria: <?php echo e($category->name); ?>

        </div>
        <div class="card-body">
            <p><strong>ID:</strong> <?php echo e($category->id); ?></p>
            <p><strong>Nome:</strong> <?php echo e($category->name); ?></p>
        </div>
    </div>

    <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/aluno.lab03/Documents/atividade_4.1/resources/views/categories/show.blade.php ENDPATH**/ ?>