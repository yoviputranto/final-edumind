<?php $__env->startSection('content'); ?>

    <main class="content dashboard-wrapper">
        <div class="container dashboard-card">
            <section class="rounded bg-white py-4 px-4">
                <h2 class="fw-bold">Welcome, <?php echo e(Str::title(Auth::user()->name)); ?>!</h2>
                <p>Anda ingin mempromosikan event anda? <a href="<?php echo e(route('user.upload')); ?>"
                        class="btn bg-purple px-4 mx-1 mt-2" style="font-size:medium;letter-spacing:2px">Upload Event</a></p>
                <div class="row">
                    <h3 class="mb-4">Daftar Event yang di Upload</h3>
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-4">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center mx-auto">
                                            <img src="<?php echo e(Storage::url($event->gambar)); ?>" class="img-fluid rounded-start"
                                                alt="...">
                                        </div>

                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title ps-0"><?php echo e(Str::words($event->judul, 3, '')); ?>

                                            </h5>
                                            <ul class="card-info card-webinar-info ps-0">

                                                <li class="list-unstyled mt-2">
                                                    <img class="d-inline"
                                                        src="<?php echo e(url('frontend/assets/ic/calendar.png')); ?>">
                                                    <p class="d-inline"><?php echo e($event->tanggal); ?></p>
                                                </li>
                                                <li class="list-unstyled mt-2">
                                                    <img class="d-inline"
                                                        src="<?php echo e(url('frontend/assets/ic/category.png')); ?>">
                                                    <p class="d-inline"><?php echo e($event->waktu); ?> WIB
                                                    </p>
                                                </li>
                                                <li class="list-unstyled mt-2">
                                                    <div class="d-flex bd-highlight mb-3">
                                                        <div class="px-1 pt-1 bd-highlight">
                                                            <a href="<?php echo e(route('user.detail.uploadevent', $event->slug)); ?>"
                                                                class="btn bg-purple">Detail</a>
                                                        </div>
                                                        <div class="ms-auto px-1 pt-1  bd-highlight">
                                                            <p class="pt-1"><?php echo e($event->status); ?></p>
                                                        </div>
                                                    </div>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php echo e($events->links()); ?>


                
                



            </section>
            
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\edumind\resources\views/user/uploadevent.blade.php ENDPATH**/ ?>