<?php $__env->startSection('content'); ?>

    <main class="content dashboard-wrapper">
        <div class="container dashboard-card">
            <section class="rounded bg-white py-4 px-4">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Informasi Detail Event</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Data Pendaftar Event</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                                                <a class=" text-decoration-none text-black"
                                                    href="mailto:<?php echo e($event->event_organizer); ?>"><i
                                                        class="far fa-envelope"></i></a>
                                                <a class=" text-decoration-none text-black"
                                                    href="https://instagram.com/<?php echo e(Str::substr($event->instagram, 1)); ?>"><i
                                                        class="fab fa-instagram"></i></a>
                                                <a href="https://wa.me/<?php echo e($event->whatsapp); ?>"><i
                                                        class="fab fa-whatsapp"></i></a>
                                            </div>
                                            <div class="col-md-5">
                                                <h5 class="card-title mt-4">Tempat</h5>
                                                <a href="<?php echo e($event->link_zoom); ?>">Link zoom</a>
                                                <a href="<?php echo e($event->link_event); ?>">Link event</a>
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
                                                    class="btn btn-success">Kembali</a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row mt-4">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-striped" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">No. HP</th>
                                                    <th scope="col">Event</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php $__currentLoopData = $devents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $devent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($no++); ?></td>
                                                        <td><?php echo e($devent->nama); ?></td>
                                                        <td><?php echo e($devent->getUser->email); ?></td>
                                                        <td><?php echo e($devent->getUser->telephone); ?></td>
                                                        <td><?php echo e($devent->getEvent->judul); ?></td>
                                                        <td><?php echo e($devent->status); ?></td>
                                                        <td><?php echo e($devent->created_at); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
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

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/user/detail-uploadevent.blade.php ENDPATH**/ ?>