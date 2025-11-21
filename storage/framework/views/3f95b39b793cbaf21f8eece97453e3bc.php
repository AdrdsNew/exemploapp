<?xml version="1.0" encoding="UTF-8"?>
<data>
<?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<item>
    <marca><?php echo e($item->marca); ?>></marca>
    <esporte><?php echo e($item->esporte); ?>></esporte>
    <pressao_psi><?php echo e($item->pressao_psi); ?>></pressao_psi>
    <diametro><?php echo e($item->diametro); ?>></diametro>
    <padrao_campeonato><?php echo e($item->padrao_campeonato); ?>></padrao_campeonato>
</item>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</data><?php /**PATH C:\Users\alan8\exemploapp\resources\views/data-xml.blade.php ENDPATH**/ ?>