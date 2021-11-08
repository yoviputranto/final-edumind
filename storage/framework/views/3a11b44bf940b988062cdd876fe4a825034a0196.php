<?php $__env->startSection('content'); ?>
    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel mx-5">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h2 class=" font-weight-medium text-black mb-2">Events</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <a href="<?php echo e(route('events.create')); ?>" class="btn btn-primary mb-4">Tambah</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="card-title mt-4">Date and Time</h5>
                                                <p>Tanggal event : <?php echo e($event->tanggal); ?></p>
                                                <p>Waktu event : <?php echo e($event->waktu); ?></p>
                                                <p>Registrasi : <?php echo e($event->registrasi); ?></p>
                                                <p>Deadline : <?php echo e($event->deadline); ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="card-title mt-4">Kontak</h5>
                                                <p>Event Oragnizer : <?php echo e($event->event_organizer); ?></p>
                                                <p>Email : <?php echo e($event->email); ?></p>
                                                <p>Instagram : <?php echo e($event->instagram); ?></p>
                                                <p>Whatsapp : <?php echo e($event->whatsapp); ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="card-title mt-4">Tempat</h5>
                                                <p>Link Zoom : <?php echo e($event->link_zoom); ?></p>
                                                <p>Link Event : <?php echo e($event->link_event); ?></p>
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
                                        <div class="row">
                                            <a href="<?php echo e(route('events.edit', $event->id)); ?>"
                                                class="btn btn-success float-left mx-1 mb-3">Edit</a>
                                            <form action="<?php echo e(route('events.destroy', $event->id)); ?>" method="POST"
                                                class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button class="btn btn-danger mb-3">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\edumind\resources\views/admin/events/index.blade.php ENDPATH**/ ?>