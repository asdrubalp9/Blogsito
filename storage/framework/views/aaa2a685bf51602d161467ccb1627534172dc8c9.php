<?php $__env->startSection('title', '| View Post'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8">
            <h1> <?php echo e($post->title); ?> </h1>
            <p class="lead"> <?php echo $post->body; ?> </p>
            <hr>
            <div class="tags">
                <?php foreach($post->tags as $tag): ?>
                    <span class="label label-default">
                        <?php echo e($tag->name); ?>

                    </span>
                <?php endforeach; ?>
            </div>
            <div id="backEndComments" style="margin-top:50px;">
                <h3>Comments <small> <?php echo e($post->comments->count()); ?>  total</small></h3>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th width="70px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($post->comments as $comment): ?> 
                            <tr>
                                <td> <?php echo e($comment->name); ?> </td>
                                <td> <?php echo e($comment->email); ?> </td>
                                <td> <?php echo e($comment->comment); ?> </td>
                                <td width="70px">
                                    <a href="<?php echo e(route('comments.edit', $comment->id )); ?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span> </a>
                                    <a href="<?php echo e(route('comments.delete', $comment->id )); ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> </a>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                <dl     >
                    <label>Url Slug</label>
                    <p><a href="<?php echo e(url('blog/'.$post -> slug)); ?>" > <?php echo e(url('blog/'.$post -> slug)); ?> </a></p>
                </dl>
                <dl class="dl-horizontal">
                    <label>Category:</label>
                    <p><?php echo e($post->category->name); ?></p>
                </dl>
                <dl>
                    <label>Created at:</label>
                    <p><?php echo e(date( 'j-M-Y h:i' , strtotime($post -> created_at))); ?></p>
                </dl>
                <dl class="dl-horizontal">
                    <label>Last updated:</label>
                    <p><?php echo e(date( 'j-M-Y h:i', strtotime( $post -> updated_at))); ?></p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <?php echo Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')); ?>

                        
                    </div>
                    <div class="col-sm-6">
                        <?php echo Form::open(['route'=>['posts.destroy', $post -> id], 'method'=>'DELETE']); ?>

                        
                            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-block'] ); ?>


                        <?php echo Form::close(); ?>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo e(Html::linkRoute('posts.index', '<< ver todos', [], ['class'=>'btn btn-default btn-block btn-h1-spacing'])); ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>