<?php $__env->startSection('content'); ?>

    <main class="content dashboard-wrapper">
        <div class="container dashboard-card">
            <section class="rounded bg-white py-4 px-4">
                <div class="card mt-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?php echo e(Storage::url($event->gambar)); ?>" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($event->judul); ?></h5>
                                <p class="card-text"><?php echo old('isi', $event->deskripsi ?? ''); ?>

                                </p>
                                <p class="card-text">Rp.<?php echo e($event->harga); ?>

                                </p>
                                <div class="row pt-0 mt-0">
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-4">Tanggal dan Waktu</h5>
                                        <p><?php echo e($event->tanggal); ?> <?php echo e($event->waktu); ?> WIB</p>

                                    </div>
                                    <div class="col-md-3">
                                        <h5 class="card-title mt-4">Kontak</h5>
                                        <a class=" text-decoration-none text-black" href="mailto:<?php echo e($event->email); ?>"><i
                                                class="far fa-envelope text-black"></i></a>
                                        <a class=" text-decoration-none text-black"
                                            href="https://instagram.com/<?php echo e(Str::substr($event->instagram, 1)); ?>"><i
                                                class="fab fa-instagram text-black"></i></a>
                                        <a href="https://wa.me/<?php echo e($event->whatsapp); ?>"><i
                                                class="fab fa-whatsapp text-black"></i></a>
                                    </div>
                                    <div class="col-md-5">
                                        <h5 class="card-title mt-4">Tempat</h5>
                                        <a href="<?php echo e($event->link_zoom); ?>">Link akses</a>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title mt-4">Eligible</h5>
                                        <p><?php echo old('isi', $event->eligible ?? ''); ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="card-title mt-4">Benefit</h5>
                                        <p><?php echo old('isi', $event->benefit ?? ''); ?></p>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-2">
                                        <a href="<?php echo e(route('user.ikutevent')); ?>"
                                            class="btn btn-success bg-purple">Kembali</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/user/detail-ikutevent.blade.php ENDPATH**/ ?>