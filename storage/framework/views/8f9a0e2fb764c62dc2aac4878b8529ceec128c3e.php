<?php $__env->startSection('title', "| $tag->name Tag"); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-8">
            <h1><?php echo e($tag->name); ?> Tag <small> <?php echo e($tag->posts()->count()); ?> </small> </h1>
        </div>
        <div class="col-md-2">
            <a href="<?php echo e(route('tags.edit', $tag->id)); ?>" class="btn btn-block btn-primary pull-right" style="margin-top:20px;">Edit</a>
        </div>
        <div class="col-md-2">
            <?php echo e(Form::open( [ 'route' => ['tags.destroy', $tag->id], 'method'=>'DELETE'] )); ?>

            <?php echo e(Form::submit('Eliminar Tag', ['class'=> 'btn btn-danger btn-block', 'style'=> 'margin-top:20px;'] )); ?>

            <?php echo e(Form::close()); ?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Tags</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tag->posts as $post): ?>
                        <tr>
                            <th><?php echo e($post->id); ?></th>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php foreach( $post->tags as $tag): ?>
                                    <span class="label label-default"> <?php echo e($tag->name); ?></span>
                                <?php endforeach; ?>
                            </td>
                            <td>   <a href="<?php echo e(route('posts.show', $post->id)); ?> " class="btn btn-default btn-xs">View</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>