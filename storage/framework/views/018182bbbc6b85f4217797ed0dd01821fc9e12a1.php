<?php if(Session::has('message')): ?>
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><apan aria-hidden="true">&times;</span></button>
    <?php echo e(Session::get('message')); ?>

</div>

<?php endif; ?>

<?php $__env->startSection('content'); ?>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>