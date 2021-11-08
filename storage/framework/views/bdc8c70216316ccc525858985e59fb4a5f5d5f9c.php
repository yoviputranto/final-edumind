<?php $__env->startPush('stylePlus'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/style/search-page.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', '- Pencarian'); ?>


<?php $__env->startSection('content'); ?>
    <!-- Header -->
    <section class="header mb-0 d-none">
        <img class="vector-below img-fluid" src="<?php echo e(asset('frontend')); ?>/assets/bg/vector-2.png" width="600px">
        <img class="vector-above img-fluid" src="<?php echo e(asset('frontend')); ?>/assets/bg/vector-1.png" width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text text-center text-lg-start">
                        <h4 class="text-uppercase">Selamat Datang di Situs</h4>
                        <img class="img-fluid" src="<?php echo e(asset('frontend')); ?>/assets/ic/edumind-header.png"
                            alt="Edumind-heading" width="450px">
                        <p>Edumind adalah sebuah situs yang berisi kumpulan event online seperti webinar, workshop,
                            ataupun kursus
                            dan juga terdapat ruang untuk diskusi.</p>
                        <button type="button" class="btn text-white fw-bold">Daftar Akun</button>
                    </div>
                </div>
                <div class="header-img col-12 col-lg-6 d-none d-lg-flex align-items-end">
                    <img class="img-fluid" src="<?php echo e(asset('frontend')); ?>/assets/illustration/ill-1.png"
                        alt="illustration" width="600px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <!-- Search section -->
    <section class="search-result">
        <div class="container">
            <div class="search-heading mx-auto text-center">
                <h1>Search "<?php echo e($keyword); ?>"</h1>
                <p><span><?php echo e(count($events) + count($articles)); ?> Hasil</span> pencarian ditemukan</p>
            </div>
            <?php if(count($events) != 0): ?>
                <div class="result-event-heading mt-4">
                    <p>Hasil pencarian dalam <span>"Event"</span></p>
                </div>
                <!-- Event row -->
                <div class="webinar-cards mt-5">
                    <div class="row">
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 col-lg-3 py-3">
                                <div class="card" style="width: 280px;">
                                    <img src="<?php echo e(Storage::url($event->gambar)); ?>" class="card-img-top">
                                    <div class="card-body">
                                        <ul class="card-info">
                                            <li class="list-unstyled">
                                                <img class="d-inline"
                                                    src="<?php echo e(asset('frontend')); ?>/assets/ic/title.png">
                                                <p class="d-inline"><?php echo e($event->judul); ?></p>
                                            </li>
                                            <li class="list-unstyled mt-2">
                                                <img class="d-inline"
                                                    src="<?php echo e(asset('frontend')); ?>/assets/ic/calendar.png">
                                                <p class="d-inline"><?php echo e($event->tanggal); ?></p>
                                            </li>
                                            <li class="list-unstyled mt-2">
                                                <img class="d-inline"
                                                    src="<?php echo e(asset('frontend')); ?>/assets/ic/category.png">
                                                <p class="d-inline"><?php echo e($event->getJenis->name); ?></p>
                                            </li>
                                        </ul>
                                        <div class="card-act d-flex justify-content-center mt-3">
                                            <a href="event-webinar-detail.html" class="btn btn-primary-none">Gratis/Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                    </div>
                </div>
            <?php endif; ?>
            <?php if(count($articles) != 0): ?>


                <div class="result-article-heading mt-5">
                    <p>Hasil pencarian dalam <span>"Artikel"</span></p>
                </div>
                <!-- Article row -->
                <div class="article-cards mt-5">
                    <div class="row">
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 col-lg-4 mt-4">
                                <div class="card" style="width: 20rem;">
                                    <img src="<?php echo e(Storage::url($article->image)); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-date">31 Agustus 2021, Admin</p>
                                        <h5 class="card-title"><?php echo e($article->title); ?></h5>
                                        <div class="card-act d-flex justify-content-between mt-3">
                                            <a href="<?php echo e(route('detailarticle', $article->slug)); ?>"
                                                class="btn btn-primary">Selengkapnya</a>
                                            <h5 class="card-date"><?php echo e($article->getCategory->name); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- End of Search section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\edumind\resources\views/frontend/search.blade.php ENDPATH**/ ?>