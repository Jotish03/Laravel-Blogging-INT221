<?php $__env->startSection('content'); ?>
<style>
    #pa{
        color: black;
    }
</style>
    <h1>Posts</h1>
    <?php if(count($posts)>0): ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <div class="card card-body bg-light "  >
            <div class="row">
            <div >
            <img class="card-img-top" style="width:250px" height="250px;" src="/storage/cover_images/<?php echo e($pt->cover_image); ?>">
            </div>
            
            <div class="col-sm-8 " >
                <h1> <a id="pa" href='/posts/<?php echo e($pt->id); ?>'><?php echo e($pt->title); ?></h1>
                    <small >Written on <?php echo e($pt->created_at); ?> by <?php echo e($pt->user->name); ?></small>
            </div>
            </div></div>
        
        
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    <?php echo e($posts->links()); ?>   
    <?php else: ?>
    
    <h4>No Posts Available</h4>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelapp\resources\views/posts/index.blade.php ENDPATH**/ ?>