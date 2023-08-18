<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

    <?php
        $count = 0;
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center my-4">Faketube</h2>
                <a name="" id="" class="btn btn-primary" href="<?php echo e(route ('channel.create')); ?>"
                    role="button">Create
                    new channel</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Subscribers</th>
                                <th scope="col" class="text-center">URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e(++$count); ?></th>
                                    <td><?php echo e($channel->ChannelName); ?></td>
                                    <td><?php echo e($channel->SubscribersCount); ?></td>
                                    <td><?php echo e($channel->URL); ?></td>
                                    <td class="d-flex gap-2 justify-content-center">
                                        <a class="btn btn-primary btn-sm" href="<?php echo e(route('channel.show', $channel)); ?>"
                                            role="button"><i class="bi bi-eye"></i></a>
                                        <a href="<?php echo e(route('channel.edit', $channel)); ?>" class="btn btn-primary btn-sm"><i
                                                class="bi bi-pencil-square"></i></a>
                                        
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modalId-<?php echo e($channel->ChannelID); ?>"><i class="bi bi-trash"></i>
                                        </button>
                                        <div class="modal fade" id="modalId-<?php echo e($channel->ChannelID); ?>" tabindex="-1"
                                            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                            aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalTitleId">Confirm</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">No
                                                        </button>
                                                        <form action="<?php echo e(route('channel.destroy', $channel)); ?>"
                                                            method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('delete'); ?>
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lalun\Desktop\laravel\Faketube\resources\views/channel/index.blade.php ENDPATH**/ ?>