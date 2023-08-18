<?php if(session('notification')): ?>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast text-bg-<?php echo e(session('notification')['type']); ?>" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Notification</strong>
                <small>just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?php echo e(session('notification')['message']); ?>

            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\lalun\Desktop\laravel\Faketube\resources\views/layouts/flash.blade.php ENDPATH**/ ?>