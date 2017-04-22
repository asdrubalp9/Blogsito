<?php $__env->startSection('title', '| Delete Comment'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Delete this?</h1>
            <p>
                <strong>Name: </strong><?php echo e($comment->name); ?><br>
                <strong>email: </strong><?php echo e($comment->email); ?><br>
                <strong>comment: </strong><?php echo e($comment->comment); ?><br>
            </p>
            <?php echo e(Form::open( [ 'route' => ['comments.destroy', $comment->id]  , 'method' => 'DELETE' ])); ?>

                <?php echo e(Form::submit('DELETE', ['class'=>'btn btn-danger btn-block'] )); ?>

            <?php echo e(Form::close()); ?>

        
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>