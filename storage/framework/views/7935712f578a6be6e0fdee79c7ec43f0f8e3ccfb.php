<?php $__env->startSection('content'); ?>

    <div class="container">
        <?php if(Session::has('done')): ?>
            <div class="alert alert-success text-center w-50 mx-auto">
                <h5 style="font-weight: bold"><?php echo e(Session::get('done')); ?></h5>
            </div>
        <?php endif; ?>
        <h1 class="text-center mb-3">List Files Page</h1>
        <div class="col-md-8 table-responsive mx-auto">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col" colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $drives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($item->id); ?></th>
                            <td><?php echo e($item->title); ?></td>
                            <td>
                                <a href="<?php echo e(route('drives.show', ['id'=>$item->id])); ?>">
                                    <i class="fas fa-sign-in-alt text-info p-1" style="font-size: 1.5em"></i>
                                </a>
                                <a href="<?php echo e(route('drives.edit', ['id'=>$item->id])); ?>">
                                    <i class="far fa-edit text-warning p-1" style="font-size: 1.5em"></i>
                                </a>
                                <a href="<?php echo e(route('drives.destroy', ['id'=>$item->id])); ?>">
                                    <i class="fas fa-ban text-danger p-1" style="font-size: 1.5em"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\online\finalLaravel\resources\views/drives/index.blade.php ENDPATH**/ ?>