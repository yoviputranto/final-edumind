<?php $__env->startPush('stylePlus'); ?>
    <link rel="stylesheet" href="<?php echo e(url('frontend/style/program-webinar-style.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', '- Event'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Header -->
    <section class="header">
        <img class="vector-above img-fluid" src="<?php echo e(url('frontend/assets/bg/vector-1.png')); ?>" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="<?php echo e(url('frontend/assets/bg/vector-2.png')); ?>" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid mb-5 ms-1" src="<?php echo e(url('frontend/assets/ic/edumind-header-alt.png')); ?>"
                            alt="logo" width="460px">
                        <h4>Webinar</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="<?php echo e(url('frontend/assets/illustration/ill-7.png')); ?>" alt=""
                        width="500px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container d-flex justify-content-center">
            <nav class="breadcrumb my-2" aria-label="breadcrumb">
                <ol class="list-group list-group-horizontal">
                    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('event')); ?>">Event</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Webinar -->
    <section class="webinar">
        <div class="container mt-3">
            <div class="webinar-categories mt-5 d-none">
                <div class="row slider-category">
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category-active text-white">
                            Semua
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                </div>
            </div>

            <!-- Webinar list section -->
            <div class="webinar-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="<?php echo e(route('webinar')); ?>">
                    <h1>Webinar</h1>
                </a>
            </div>
            <div class="webinar-cards mt-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="row slider-webinar">
                    <?php $__currentLoopData = $webinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="<?php echo e(Storage::url($webinar->gambar)); ?>" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info card-webinar-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="<?php echo e(url('frontend/assets/ic/title.png')); ?>">
                                            <p class="d-inline"> <?php echo e(Str::words($webinar->judul, 3, '')); ?></p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="<?php echo e(url('frontend/assets/ic/calendar.png')); ?>">
                                            <p class="d-inline"><?php echo e($webinar->tanggal); ?></p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="<?php echo e(url('frontend/assets/ic/category.png')); ?>">
                                            <p class="d-inline"><?php echo e($webinar->getCategory->name); ?></p>
                                        </li>
                                    </ul>
                                    <hr widt>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#"
                                            class="btn btn-webinar-price"><?php echo e($webinar->harga == 0 ? 'Gratis' : 'Rp' . $webinar->harga); ?></a>
                                        <a href="<?php echo e(route('detailevent', $webinar->id)); ?>"
                                            class="btn btn-primary-none btn-webinar-action">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </div>
            </div>
        </div>
    </section>
    <!-- End of Webinar -->

    <!-- Workshop -->
    <section class="webinar mt-5">
        <div class="container mt-3">
            <!-- Webinar list section -->
            <div class="webinar-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="<?php echo e(route('workshop')); ?>">
                    <h1>Workshop</h1>
                </a>
            </div>
            <div class="webinar-cards mt-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="row slider-webinar">
                    <?php $__currentLoopData = $workshops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workshop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="<?php echo e(Storage::url($workshop->gambar)); ?>" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info card-webinar-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="<?php echo e(url('frontend/assets/ic/title.png')); ?>">
                                            <p class="d-inline"><?php echo e(Str::words($workshop->judul, 3, '')); ?></p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="<?php echo e(url('frontend/assets/ic/calendar.png')); ?>">
                                            <p class="d-inline"><?php echo e($workshop->tanggal); ?></p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="<?php echo e(url('frontend/assets/ic/category.png')); ?>">
                                            <p class="d-inline"><?php echo e($workshop->getCategory->name); ?></p>
                                        </li>
                                    </ul>
                                    <hr widt>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#"
                                            class="btn btn-webinar-price"><?php echo e($workshop->harga == 0 ? 'Gratis' : 'Rp' . $workshop->harga); ?></a>
                                        <a href="<?php echo e(route('detailevent', $workshop->id)); ?>"
                                            class="btn btn-primary-none btn-webinar-action">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </div>
    </section>
    <!-- End of Workshop -->

    <!-- Kursus -->
    <section class="webinar mt-5">
        <div class="container mt-3">
            <!-- Webinar list section -->
            <div class="webinar-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="<?php echo e(route('kursus')); ?>">
                    <h1>Kursus</h1>
                </a>
            </div>
            <div class="webinar-cards mt-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="row slider-webinar">
                    <?php $__currentLoopData = $kursuss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kursus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="<?php echo e(Storage::url($kursus->gambar)); ?>" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info card-webinar-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="<?php echo e(url('frontend/assets/ic/title.png')); ?>">
                                            <p class="d-inline"><?php echo e(Str::words($kursus->judul, 3, '')); ?></p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="<?php echo e(url('frontend/assets/ic/calendar.png')); ?>">
                                            <p class="d-inline"><?php echo e($kursus->tanggal); ?></p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="<?php echo e(url('frontend/assets/ic/category.png')); ?>">
                                            <p class="d-inline"><?php echo e($kursus->getCategory->name); ?></p>
                                        </li>
                                    </ul>
                                    <hr widt>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="#"
                                            class="btn btn-webinar-price"><?php echo e($kursus->harga == 0 ? 'Gratis' : 'Rp' . $kursus->harga); ?></a>
                                        <a href="<?php echo e(route('detailevent', $kursus->id)); ?>"
                                            class="btn btn-primary-none btn-webinar-action">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Kursus -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('jsPlus'); ?>

    <script>
        $('.slider-category').slick({
            dots: false,
            infinite: true,
            speed: 1200,
            slidesToShow: 5,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow-category"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow-category"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
    <script>
        $('.slider-webinar').slick({
            dots: true,
            infinite: true,
            speed: 1200,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow-webinar"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow-webinar"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\edumind\resources\views/frontend/event/event.blade.php ENDPATH**/ ?>
