<?php $__env->startSection('title', '| Forgot my password'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Reset Password
                </div>
                    <div class="panel-body">
                        <?php if(session('status')): ?>

                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>

                        <?php endif; ?>
                        <?php echo Form::open(['url'=> 'password/email', 'method' => "POST" ]); ?>


                        <?php echo e(Form::label('email', 'Email Address:')); ?>

                        <?php echo e(Form::email('email', null, ['class'=> 'form-control'])); ?>


                        <?php echo e(Form::submit('Reset Password', ['class'=>'btn btn-primary'])); ?>


                        <?php echo Form::close(); ?>

                        
                    
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>