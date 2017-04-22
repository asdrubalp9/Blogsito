<?php $__env->startSection('title', '| All posts' ); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">

            <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create new post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                <tbody>

                    <?php foreach($posts as $post): ?>
                        <tr>
                            <th> <?php echo e($post -> id); ?></th>
                            <td> <?php echo e($post -> title); ?> </td>
                            <td> <?php echo e(substr( strip_tags($post -> body) , 0 ,25 )); ?> <?php echo e(strlen(strip_tags($post -> body)) > 25 ? "...":""); ?> </td>
                            <td> <?php echo e(date('d-m-Y', strtotime($post -> created_at))); ?> </td>
                            <td> 
                                <?php echo Html::linkRoute('posts.show', 'View', array($post->id), array('class' => 'btn btn-default btn-sm')); ?>

                                <?php echo Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-default btn-sm')); ?>

                                
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <div class="text-center">
                <?php echo $posts-> links(); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>