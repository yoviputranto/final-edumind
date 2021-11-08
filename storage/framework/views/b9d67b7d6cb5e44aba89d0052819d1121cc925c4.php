<?php $__env->startSection('content'); ?>

    <main class="content dashboard-wrapper">
        <div class="container dashboard-card">
            <section class="rounded bg-white py-4 px-4">
                <h2 class="fw-bold">Welcome, <?php echo e(Str::title(Auth::user()->name)); ?>!</h2>
                <p>Siap jangkau 1.000.000.000 anak muda yang dapat berpartisipasi dalam event yang kamu adakan</p>
                <a href="<?php echo e(route('user.upload')); ?>" class="btn bg-purple px-4"
                    style="font-size:medium;letter-spacing:2px">Upload Event</a>


                <div class="row mt-4">
                    <?php $__currentLoopData = $devents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $devent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($devent->status == 'berhasil'): ?>
                            <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-4">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center mx-auto">
                                                <img src="<?php echo e(Storage::url($devent->getEvent->gambar)); ?>"
                                                    class="img-fluid rounded-start" alt="...">
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title ps-0">
                                                    <?php echo e(Str::words($devent->getEvent->judul, 3, '')); ?>

                                                </h5>
                                                <ul class="card-info card-webinar-info ps-0">

                                                    <li class="list-unstyled mt-2">
                                                        <img class="d-inline"
                                                            src="<?php echo e(url('frontend/assets/ic/calendar.png')); ?>">
                                                        <p class="d-inline"><?php echo e($devent->getEvent->tanggal); ?></p>
                                                    </li>
                                                    <li class="list-unstyled mt-2">
                                                        <img class="d-inline"
                                                            src="<?php echo e(url('frontend/assets/ic/category.png')); ?>">
                                                        <p class="d-inline"><?php echo e($devent->getEvent->waktu); ?> WIB
                                                        </p>
                                                    </li>
                                                    <li class="list-unstyled mt-2">
                                                        <a href="<?php echo e(route('user.detail.ikutevent', $devent->getEvent->slug)); ?>"
                                                            class="btn bg-purple">Detail</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php echo e($devents->links()); ?>



            </section>
            
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/user/ikutevent.blade.php ENDPATH**/ ?>