<?php $titleTag =  htmlSpecialChars($post->title) ; ?>
<?php $__env->startSection('title', "| $titleTag " ); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1><?php echo e($post->title); ?></h1>
            <p><?php echo e($post->body); ?></p>
            <hr>
            <p>Posted on: <?php echo e($post->category->name); ?> </p>
        </div>
    </div>
    <hr>
    <h1>Comments</h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php foreach($post->comments as $comment): ?>
                <div class="comment">
                    <p><strong> <?php echo e($comment->name); ?> Dijo! </strong></p>
                    <p><strong>Email:</strong> <?php echo e($comment->email); ?> </p>
                    <p><strong>Comment: </strong> <?php echo e($comment->comment); ?> </p>
                    <hr>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <hr>
    <div class="row">
        
        <div id="comment-form" class="col-md-8 col-md-offset-2">
            <?php echo e(Form::open([ 'route'=> ['comments.store', $post->id], 'method' => 'POST'  ] )); ?>

                <div class="row">
                    <div class="col-md-6">
                        <?php echo e(Form::label('name', 'Name: ')); ?>

                        <?php echo e(Form::text('name', null, ['class'=>'form-control'])); ?>

                    </div>
                    <div class="col-md-6">
                        <?php echo e(Form::label('email', 'Email: ')); ?>

                        <?php echo e(Form::text('email', null, ['class'=> 'form-control'])); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(Form::label('comment', 'Comment: ')); ?>

                        <?php echo e(Form::textArea('comment', null, ['class'=> 'form-control', 'rows'=> '5'] )); ?>

                        <br>
                        <?php echo e(Form::submit('Add Comment', ['class'=>'btn btn-block btn-success'])); ?>

                    </div>
                </div>

                

            <?php echo e(Form::close()); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>