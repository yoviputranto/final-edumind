<?php $__env->startSection('content'); ?>

    <main class="content dashboard-wrapper">
        <div class="container dashboard-card">
            <section class="rounded bg-white py-4 px-4">
                <h2 class="fw-bold">Welcome, <?php echo e(Auth::user()->name); ?>!</h2>
                <p>Siap jangkau 1.000.000.000 anak muda yang dapat berpartisipasi dalam event yang kamu adakan</p>
                <a href="<?php echo e(route('user.upload')); ?>" class="btn bg-purple px-4"
                    style="font-size:medium;letter-spacing:2px">Upload Event</a>
            </section>
            <section class="my-4 mx-3">
                <h3><i class="fas fa-chart-bar text-purple me-2"></i> Overview</h3>
                <div class="row my-3">
                    <div class="col-lg-3 mb-3">
                        <div class="card">
                            <div class="card-body d-flex flex-column align-items-end">
                                <p class="py-0 my-0 fs-6 fw-normal"><span class="icon icon-purple me-1"><i
                                            class="fas fa-calendar-week"></i></span> Event yang diikuti</p>
                                <p class="py-0 fs-4 fw-bold"><?php echo e(count($ikutEvent)); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php if(count($event) > 0): ?>
                        <div class="col-lg-3 mb-3">
                            <div class="card">
                                <div class="card-body d-flex flex-column align-items-end">
                                    <p class="py-0 my-0 fs-6 fw-normal"><span class="icon icon-orange me-1"><i
                                                class="fas fa-calendar-week"></i></span> Event yang diupload</p>
                                    <p class="py-0 fs-4 fw-bold"><?php echo e(count($event)); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="card">
                                <div class="card-body d-flex flex-column align-items-end">
                                    <p class="py-0 my-0 fs-6 fw-normal"><span class="icon icon-green me-1"><i
                                                class="fas fa-users"></i></span> Peserta Semua Events</p>
                                    <p class="py-0 fs-4 fw-bold"><?php echo e(count($devents)); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="card">
                                <div class="card-body d-flex flex-column align-items-end">
                                    <p class="py-0 my-0 fs-6 fw-normal"><span class="icon icon-yellow me-1"><i
                                                class="fas fa-money-bill"></i></span> Total Penjualan</p>
                                    <p class="py-0 fs-4 fw-bold">Rp.0</p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </section>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/user/index.blade.php ENDPATH**/ ?>