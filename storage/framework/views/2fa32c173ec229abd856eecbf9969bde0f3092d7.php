<?php if( ! empty( $errors_array = $errors->all() ) ): ?>
    <?php $__currentLoopData = $errors_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p><?php echo e($error); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

<?php if( ! empty( ! empty( $success_msg = session( 'success' ) ) ) ): ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p><?php echo e($success_msg); ?></p>
        </div>
<?php endif; ?>