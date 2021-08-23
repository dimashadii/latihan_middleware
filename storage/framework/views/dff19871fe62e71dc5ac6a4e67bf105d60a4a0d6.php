<?php $__env->startSection('content'); ?>
<div class="container">
            

<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
    <?php echo e(config('app.name', 'Laravel')); ?>

</a>
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="<?php echo e(url('admin')); ?>">Halaman Admin</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('penjual')); ?>">Halaman Penjual</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('pembeli')); ?>">Halaman Pembeli</a>
    </li>
</ul>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\latihan_middleware\resources\views/home.blade.php ENDPATH**/ ?>