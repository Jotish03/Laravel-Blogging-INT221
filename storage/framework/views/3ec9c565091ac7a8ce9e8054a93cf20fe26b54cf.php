<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                        <a href="/posts/create" class="btn  " style="background-color:black;color:white;">Create Post</a>
                        <div >
                            <br>
                    <h3>Your Blog Posts</h3>
                    <?php if(count($posts)>0): ?>
                    <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($post->title); ?></td>
                    <td><a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-dark btn-sm">Edit</a></td>
                        <td><?php echo Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right']); ?>


                            <?php echo e(Form::hidden('_method','DELETE')); ?>

                            <?php echo e(Form::submit('Delete Post',['class'=>'btn btn-danger btn-sm'])); ?>

                            <?php echo Form::close(); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                   
                    </table>
                    <?php else: ?> 
                    <p>You have no posts</p>
                    <?php endif; ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelapp\resources\views/home.blade.php ENDPATH**/ ?>