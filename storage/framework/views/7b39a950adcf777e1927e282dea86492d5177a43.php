<?php $__env->startPush('stylePlus'); ?>
    <link rel="stylesheet" href="<?php echo e(url('frontend/style/upload-event-style.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', '- Detail Event'); ?>

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
                        <h4><?php echo e($event->getJenis->name); ?></h4>
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
                    <li class="breadcrumb-item"><a href="<?php echo e(route('beranda')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('event')); ?>">Event</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('detailevent', $event->slug)); ?>">Detail Event</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Event-detail -->
    <section class="event-detail mb-5">
        <div class="container mt-3">
            <div class="event-detail-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="">
                    <h1>Detail <?php echo e($event->getJenis->name); ?></h1>
                </a>
            </div>
            <div class="event-detail-body">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <img class="event-img" src="<?php echo e(Storage::url($event->gambar)); ?>" alt="poster event"
                            width="400px">
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="event-desc">
                            <h2><?php echo e($event->judul); ?></h2>
                            <p><?php echo $event->deskripsi; ?></p>
                            <div class="event-date d-inline-block">
                                <?php echo e($event->tanggal); ?>

                            </div>
                            <div class="event-time d-inline-block">
                                Pukul <?php echo e($event->waktu); ?> WIB - Selesai
                            </div>
                            <div class="event-time d-inline-block">
                                <?php echo e($event->getCategory->name); ?>

                            </div>
                        </div>
                        <div class="event-desc-list mt-4">
                            <div class="row  mb-3">
                                <div class="col-6">
                                    <div class="event-desc-item">
                                        <h5 class="d-block bg-transparent">Event Organizer.</h5>
                                        <span class="d-inline"><?php echo e($event->event_organizer); ?></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="event-desc-item">
                                        <h5 class="d-block bg-transparent">Biaya Pendaftaran.</h5>
                                        <span class="d-inline">
                                            Rp. <?php echo number_format($event->harga, 0, ',', '.'); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="event-desc-item">
                                        <h5 class="d-block bg-transparent">Registrasi.</h5>
                                        <span class="d-inline"><?php echo e($event->registrasi); ?> -
                                            <?php echo e($event->deadline); ?></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="event-desc-item">
                                        <h5 class="d-block bg-transparent">Social Media.</h5>
                                        <ul class="ps-0 list-group list-group-horizontal">
                                            <li class="list-unstyled"><a href="mailto:<?php echo e($event->email); ?>"><img
                                                        src="<?php echo e(url('frontend/assets/ic/email-svg.svg')); ?>"
                                                        width="20px"></a></li>
                                            <li class="list-unstyled"><a
                                                    href="https://wa.me/<?php echo e($event->whatsapp); ?>"><img
                                                        src="<?php echo e(url('frontend/assets/ic/whatsapp-svg.svg')); ?>"
                                                        width="20px"></a></li>
                                            <li class="list-unstyled"><a
                                                    href="https://instagram.com/<?php echo e(Str::substr($event->instagram, 1)); ?>"><img
                                                        src="<?php echo e(url('frontend/assets/ic/instagram-svg.svg')); ?>"
                                                        width="20px"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="event-desc-item d-inline-block">
                                        <h5 class="d-block bg-transparent">Benefit.</h5>
                                        <p><?php echo $event->benefit; ?></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="event-desc-item d-inline-block">
                                        <h5 class="d-block bg-transparent">Eligible.</h5>
                                        <p><?php echo $event->eligible; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(Auth::user()): ?>
                <?php if(count($devent) == 0): ?>
                    <form action="<?php echo e(route('user.devent.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="event_id" value="<?php echo e($event->id); ?>" hidden>

                        <?php if($event->harga == 0): ?>
                            <button href="#" type="submit" class="btn btn-uploaded d-inline mt-4">
                                <div class="row">
                                    <div class="col-7 d-flex justify-content-end pe-2">
                                        Daftar <?php echo e($event->getJenis->name); ?>

                                    </div>
                                    <div class="col-5 d-flex justify-content-end">
                                        <img class="pt-1"
                                            src="<?php echo e(url('frontend/assets/ic/register-svg.svg')); ?>" width="20px">
                                    </div>
                                </div>
                            </button>
                        <?php else: ?>
                            <button href="#" type="button" class="btn btn-uploaded d-inline mt-4" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <div class="row">
                                    <div class="col-7 d-flex justify-content-end pe-2">
                                        Daftar <?php echo e($event->getJenis->name); ?>

                                    </div>
                                    <div class="col-5 d-flex justify-content-end">
                                        <img class="pt-1"
                                            src="<?php echo e(url('frontend/assets/ic/register-svg.svg')); ?>" width="20px">
                                    </div>
                                </div>
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="file" name="bukti" class="form-control" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </form>
                <?php else: ?>
                    <?php if($eventku->status == 'proses'): ?>
                        <a href="<?php echo e(route('user.ikutevent')); ?>" type="submit" class="btn btn-uploaded d-inline mt-4">
                            <div class="row">
                                <div class="col-7 d-flex justify-content-end pe-2">
                                    Akses <?php echo e($event->getJenis->name); ?>

                                </div>
                                <div class="col-5 d-flex justify-content-end">
                                    <img class="pt-1" src="<?php echo e(url('frontend/assets/ic/register-svg.svg')); ?>"
                                        width="20px">
                                </div>
                            </div>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('user.detail.ikutevent', $eventku->getEvent->slug)); ?>" type="submit"
                            class="btn btn-uploaded d-inline mt-4">
                            <div class="row">
                                <div class="col-7 d-flex justify-content-end pe-2">
                                    Akses <?php echo e($event->getJenis->name); ?>

                                </div>
                                <div class="col-5 d-flex justify-content-end">
                                    <img class="pt-1" src="<?php echo e(url('frontend/assets/ic/register-svg.svg')); ?>"
                                        width="20px">
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>

                <?php endif; ?>
            <?php else: ?>
                <form action="<?php echo e(route('user.devent.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="event_id" value="<?php echo e($event->id); ?>" hidden>


                    <button href="" type="submit" class="btn btn-uploaded d-inline mt-4">
                        <div class="row">
                            <div class="col-7 d-flex justify-content-end pe-2">
                                Daftar <?php echo e($event->getJenis->name); ?>

                            </div>
                            <div class="col-5 d-flex justify-content-end">
                                <img class="pt-1" src="<?php echo e(url('frontend/assets/ic/register-svg.svg')); ?>"
                                    width="20px">
                            </div>
                        </div>
                    </button>

                </form>
            <?php endif; ?>



            <div class="copy-text">
                <input type="text" class="text" value="<?php echo e(route('detailevent', $event->slug)); ?>" readonly
                    style="z-index: -999; position: absolute; bottom: 0;">
                <button type="submit" id="liveToastBtn" class="btn btn-upload d-inline mt-4">
                    <div class="row">
                        <div class="col-7 d-flex justify-content-end copy-text" style="padding-right: 38px;">
                            Copy Link
                        </div>
                        <div class="col-5 d-flex justify-content-end">
                            <img class="pt-1" src="<?php echo e(asset('frontend')); ?>/assets/ic/copy-svg.svg"
                                width="20px">
                        </div>
                    </div>
                </button>
                
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        
                        <div class="toast-body">
                            Link telah disalin
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo e(route('pdfEvent', $event->slug)); ?>" type="submit" class="btn btn-upload d-inline mt-4">
                <div class="row">
                    <div class="col-7 d-flex justify-content-end copy-text" style="padding-right: 38px;">
                        Unduh PDF
                    </div>
                    <div class="col-5 d-flex justify-content-end">
                        <i class="far fa-file-pdf pt-1 fa-lg text-black-50" style="width: 35px"></i>
                    </div>
                </div>
            </a>
            
            
        </div>
        </div>
        </div>
    </section>
    <!-- End of Webinar-detail -->
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

    <script>
        let copyText = document.querySelector(".copy-text");
        copyText.querySelector("button").addEventListener("click", function() {
            let input = copyText.querySelector("input.text");
            input.select();
            document.execCommand("copy");
        });
        var toastTrigger = document.getElementById('liveToastBtn')
        var toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
            toastTrigger.addEventListener('click', function() {
                var toast = new bootstrap.Toast(toastLiveExample)

                toast.show()
            })
        }
    </script>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/frontend/event/detail-event.blade.php ENDPATH**/ ?>