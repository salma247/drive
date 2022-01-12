<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1 class="text-center"> Add File Page </h1>
        <!--Show if there is aany errors-->
        <?php if($errors->any()): ?>
            <div class="alert alert-danger w-50">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="col-md-8 mx-auto mt-3">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('drives.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="title">File title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="form-group">
                            <label for="description">File Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>

                        <div class="form-group">
                            <label for="inputFile">Upload your file</label>
                            <input type="file" class="form-control" id="inputFile" name="inputFile">
                        </div>

                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\online\finalLaravel\resources\views/drives/create.blade.php ENDPATH**/ ?>