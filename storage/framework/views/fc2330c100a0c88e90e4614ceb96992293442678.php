<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center">Show file : <?php echo e($drive->id); ?></h1>
        <div class="col-md-6 mx-auto mt-3">
            <div class="card">
                <img src="<?php echo e(asset("upload/$drive->file")); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($drive->title); ?></h5>
                    <p class="card-text"><?php echo e($drive->description); ?></p>
                    <a href="<?php echo e(route('drives.download', ['id'=>$drive->id])); ?>" class="btn btn-success rounded-pill" style="float: right">Download</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\online\finalLaravel\resources\views/drives/show.blade.php ENDPATH**/ ?>