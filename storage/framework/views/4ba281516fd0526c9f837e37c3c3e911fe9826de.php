<?php $__env->startSection('content'); ?>

<a  href="/posts" class="btn  btn-sm" style="background-color:black;color:white;float:right;">Go Back</a>
<br><br>
<h1><?php echo e($post->title); ?></h1>
<img style="width:20%;height:20%" src="/storage/cover_images/<?php echo e($post->cover_image); ?>"><br>
<br>
<div style="color:black;"><?php echo $post->body; ?></div>
<hr>
<small style="color:black;">
    Wriiten on <?php echo e($post->created_at); ?> <b> by <?php echo e($post->user->name); ?></b>
</small>
<hr>
<?php if(!Auth::guest()): ?>
    <?php if(Auth::user()->id==$post->user_id): ?>
<a  href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-dark btn-sm">Edit Post</a>

<?php echo Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right']); ?>


<?php echo e(Form::hidden('_method','DELETE')); ?>

<?php echo e(Form::submit('Delete Post',['class'=>'btn btn-danger btn-sm'])); ?>

<?php echo Form::close(); ?>

    <?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelapp\resources\views/posts/show.blade.php ENDPATH**/ ?>