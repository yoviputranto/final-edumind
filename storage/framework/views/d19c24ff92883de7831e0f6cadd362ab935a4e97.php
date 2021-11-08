<?php $__env->startPush('stylePlus'); ?>
    <link rel="stylesheet" href="<?php echo e(url('frontend/style/logged-in-style.css')); ?>">
<?php $__env->stopPush(); ?>




<?php $__env->startSection('content'); ?>


    <?php if(Auth::user()): ?>
        <!-- Header -->
        <section class="header">
            <img class="vector-below img-fluid" src="<?php echo e(url('frontend/assets/bg/vector-2.png')); ?>" width="600px">
            <img class="vector-above img-fluid" src="<?php echo e(url('frontend/assets/bg/vector-1.png')); ?>" width="600px">
            <div class="container">
                <div class="row">
                    <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                        <div class="text text-center text-lg-start">
                            <h4 class="text-uppercase">Selamat Datang di Situs</h4>
                            <img class="img-fluid" src="<?php echo e(url('frontend/assets/ic/edumind-header.png')); ?>"
                                width="450px">
                            <p>Edumind adalah sebuah situs yang berisi kumpulan event online seperti webinar, workshop,
                                ataupun kursus
                                dan juga terdapat ruang untuk diskusi.</p>
                            
                        </div>
                    </div>
                    <div class="header-img col-12 col-lg-6 d-none d-lg-flex align-items-end">
                        <img class="img-fluid" src="<?php echo e(url('frontend/assets/illustration/ill-1.png')); ?>"
                            alt="illustration" width="600px">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Header -->

        <!-- Statistic -->
        <section class="statistic" data-aos="fade-up">
            <div class="container">
                <div class="row statistic-row">
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="<?php echo e(url('frontend/assets/ic/person.png')); ?>"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>100</h3>
                                <h6>Akun Terdaftar</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="<?php echo e(url('frontend/assets/ic/event.png')); ?>"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>20</h3>
                                <h6>Event Terdaftar</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="<?php echo e(url('frontend/assets/ic/world.png')); ?>"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>173</h3>
                                <h6>Pengunjung Situs</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="<?php echo e(url('frontend/assets/ic/handshake.png')); ?>"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>16</h3>
                                <h6>Partnerships</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Statistic -->

        <!-- 2W Questions Section -->
        <section class="TwoWQuestions mt-5 px-4 p-lg-0">
            <div class="container scale-up" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-lg-6 px-5 pt-5">
                        <img class="img-fluid" src="<?php echo e(url('frontend/assets/illustration/ill-2.png')); ?>"
                            alt="illustration" width="500px">
                    </div>
                    <div class="col-12 col-lg-6 text-what">
                        <h4>Apa itu Edumind?</h4>
                        <p>Edumind adalah sebuah situs yang menampung berbagai macam event menarik seperti webinar,
                            workshop, dan kursus. Selain itu, Edumind juga menyediakan ruang untuk berdiskusi dalam suatu
                            topik dari pertanyaan yang ada. Edumind merupakan situs untuk pengembangan diri melalui
                            pengetahuan-pengetahuan yang dibagikan dari satu orang ke orang lainnya.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of 2W Questions Section -->


        <!-- Event -->
        <section class="event" data-aos="fade-up">
            <div class="container mt-5">
                <div class="event-heading mx-auto text-center">
                    <h1>Event Terpopuler</h1>
                </div>
                <div class="event-cards mt-5">
                    <div class="row slider">
                        <?php $__currentLoopData = $popEvent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 col-lg-3 py-3">
                                <div class="card mx-auto scale-up" style="width: 280px;">
                                    <img src="<?php echo e(Storage::url($event->gambar)); ?>" class="card-img-top">
                                    <div class="card-body">
                                        <ul class="card-info card-webinar-info">
                                            <li class="list-unstyled">
                                                <img class="d-inline"
                                                    src="<?php echo e(url('frontend/assets/ic/title.png')); ?>">
                                                <p class="d-inline">
                                                    <?php echo e(Str::words($event->judul, 3, '')); ?>

                                                </p>
                                            </li>
                                            <li class="list-unstyled mt-2">
                                                <img class="d-inline"
                                                    src="<?php echo e(url('frontend/assets/ic/calendar.png')); ?>">
                                                <p class="d-inline"><?php echo e($event->tanggal); ?></p>
                                            </li>
                                            <li class="list-unstyled mt-2">
                                                <img class="d-inline"
                                                    src="<?php echo e(url('frontend/assets/ic/category.png')); ?>">
                                                <p class="d-inline"><?php echo e($event->getCategory->name); ?></p>
                                            </li>
                                        </ul>
                                        <hr widt>
                                        <div class="card-act d-flex justify-content-between mt-3">
                                            <?php if($event->harga == 0): ?>
                                                <a href="#" class="btn btn-webinar-price">Gratis</a>
                                            <?php else: ?>
                                                <a href="#" class="btn btn-webinar-price">Rp. <?php echo number_format($event->harga, 0, ',', '.'); ?></a>
                                            <?php endif; ?>
                                            <a href="<?php echo e(route('detailevent', $event->slug)); ?>"
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
        <!-- End of Event -->

        <!-- Article -->
        <section class="event" data-aos="fade-up">
            <div class="container mt-3">
                <div class="event-heading mx-auto text-center">
                    <h1>Rekomendasi Event</h1>
                </div>
                <div class="event-cards mt-5">
                    <div class="row slider">
                        <?php $__currentLoopData = $rekomEvent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 col-lg-3 py-3">
                                <div class="card mx-auto scale-up" style="width: 280px;">
                                    <img src="<?php echo e(Storage::url($event->gambar)); ?>" class="card-img-top">
                                    <div class="card-body">
                                        <ul class="card-info card-webinar-info">
                                            <li class="list-unstyled">
                                                <img class="d-inline"
                                                    src="<?php echo e(url('frontend/assets/ic/title.png')); ?>">
                                                <p class="d-inline">
                                                    <?php echo e(Str::words($event->judul, 3, '')); ?>

                                                </p>
                                            </li>
                                            <li class="list-unstyled mt-2">
                                                <img class="d-inline"
                                                    src="<?php echo e(url('frontend/assets/ic/calendar.png')); ?>">
                                                <p class="d-inline"><?php echo e($event->tanggal); ?></p>
                                            </li>
                                            <li class="list-unstyled mt-2">
                                                <img class="d-inline"
                                                    src="<?php echo e(url('frontend/assets/ic/category.png')); ?>">
                                                <p class="d-inline"><?php echo e($event->getCategory->name); ?></p>
                                            </li>
                                        </ul>
                                        <hr widt>
                                        <div class="card-act d-flex justify-content-between mt-3">
                                            <?php if($event->harga == 0): ?>
                                                <a href="#" class="btn btn-webinar-price">Gratis</a>
                                            <?php else: ?>
                                                <a href="#" class="btn btn-webinar-price">Rp. <?php echo number_format($event->harga, 0, ',', '.'); ?></a>
                                            <?php endif; ?>
                                            <a href="<?php echo e(route('detailevent', $event->slug)); ?>"
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
        <!-- End of Article -->

        <!-- Tagline -->
        <section class="tagline" data-aos="fade-up">
            <div class="container d-flex justify-content-center text-white">
                <h3 class="m-0">Train your mind to see the world in a different way</h3>
            </div>
        </section>
        <!-- ENnd of Tagline -->

        <!-- Article -->
        <section class="article" data-aos="fade-up">
            <div class="container mt-3">
                <div class="article-heading mx-auto text-center">
                    <h1>Artikel Terkini</h1>
                </div>
                <div class="article-cards mt-5">
                    <div class="row slider">
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 col-lg-4 py-3">
                                <div class="card mx-auto scale-up" style="width: 20rem;">
                                    <img src="<?php echo e(Storage::url($article->image)); ?>" class="card-img-top"
                                        alt="illustration">
                                    <div class="card-body">
                                        <p class="card-date"><?php echo e($article->created_at); ?>, <?php echo e($article->author); ?>

                                        </p>
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
            </div>
        </section>
        <!-- End of Article -->
    <?php else: ?>
        <!-- Header -->
        <section class="header mb-0">
            <img class="vector-below img-fluid" src="<?php echo e(url('frontend/assets/bg/vector-2.png')); ?>" width="600px">
            <img class="vector-above img-fluid" src="<?php echo e(url('frontend/assets/bg/vector-1.png')); ?>" width="600px">
            <div class="container">
                <div class="row">
                    <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                        <div class="text text-center text-lg-start">
                            <h4 class="text-uppercase">Selamat Datang di Situs</h4>
                            <img class="img-fluid" src="<?php echo e(url('frontend/assets/ic/edumind-header.png')); ?>"
                                alt="Edumind-heading" width="450px">
                            <p>Edumind adalah sebuah situs yang berisi kumpulan event online seperti webinar, workshop,
                                ataupun
                                kursus
                                dan juga terdapat ruang untuk diskusi.</p>
                            <a href="<?php echo e(route('register')); ?>" type="button" class="btn text-white fw-bold">Daftar
                                Akun</a>
                        </div>
                    </div>
                    <div class="header-img col-12 col-lg-6 d-none d-lg-flex align-items-end">
                        <img class="img-fluid" src="<?php echo e(url('frontend/assets/illustration/ill-1.png')); ?>"
                            alt="illustration" width="600px">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Header -->

        <!-- Statistic -->
        <section class="statistic" data-aos="fade-up">
            <div class="container">
                <div class="row statistic-row">
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="<?php echo e(url('frontend/assets/ic/person.png')); ?>"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>100</h3>
                                <h6>Akun Terdaftar</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="<?php echo e(url('frontend/assets/ic/event.png')); ?>"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>20</h3>
                                <h6>Event Terdaftar</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="<?php echo e(url('frontend/assets/ic/world.png')); ?>"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>173</h3>
                                <h6>Pengunjung Situs</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                        <div class="row">
                            <div class="col-5 img-column">
                                <img class="img-fluid float-end" src="<?php echo e(url('frontend/assets/ic/handshake.png')); ?>"
                                    width="60px">
                            </div>
                            <div class="col-7 text-column text-white">
                                <h3>16</h3>
                                <h6>Partnerships</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Statistic -->

        <!-- 2W Questions Section -->
        <section class="TwoWQuestions mt-5 px-4 p-lg-0">
            <div class="container scale-up" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-lg-6 px-5 pt-5">
                        <img class="img-fluid" src="<?php echo e(url('frontend/assets/illustration/ill-2.png')); ?>"
                            alt="illustration" width="500px">
                    </div>
                    <div class="col-12 col-lg-6 text-what">
                        <h4>Apa itu Edumind?</h4>
                        <p>Edumind adalah sebuah situs yang menampung berbagai macam event menarik seperti webinar,
                            workshop, dan kursus. Selain itu, Edumind juga menyediakan ruang untuk berdiskusi dalam suatu
                            topik dari pertanyaan yang ada. Edumind merupakan situs untuk pengembangan diri melalui
                            pengetahuan-pengetahuan yang dibagikan dari satu orang ke orang lainnya.</p>
                    </div>
                </div>
            </div>
            <div class="container mt-5 scale-up" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-lg-6 text-why">
                        <h4>Mengapa Harus Edumind?</h4>
                        <p>Edumind menyediakan beberapa fitur yang bermanfaat seperti event, diskusi dan artikel yang
                            berfungsi sebagai penyampaian informasi atau pengetahuan serta menjadi ruang diskusi untuk
                            bertukar pikiran. Pengguna dapat mengikuti event yang sesuai informasi yang ingin didapat, lalu
                            bertanya di ruang diskusi untuk bertukar pikiran serta mengakses artikel untuk melihat informasi
                            yang selalu mengikuti perkembangan zaman.</p>
                    </div>
                    <div class="col-12 col-lg-6 px-5 pt-5">
                        <img class="img-fluid" src="<?php echo e(url('frontend/assets/illustration/ill-3.png')); ?>"
                            alt="illustration" width="500px">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of 2W Questions Section -->

        <!-- Our Features -->
        <section class="our-features mt-5" data-aos="fade-up">
            <div class="container">
                <div class="our-features-header d-flex justify-content-center text-white">
                    <img class="img-fluid mx-5 d-none d-lg-block" src="<?php echo e(url('frontend/assets/ic/arrow-left.png')); ?>">
                    <h1>FITUR KAMI</h1>
                    <img class="img-fluid mx-5 d-none d-lg-block" src="<?php echo e(url('frontend/assets/ic/arrow-right.png')); ?>">
                </div>
                <div class="our-features-cards">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <div class="card mx-auto mb-4 mb-lg-0 scale-up" style="width: 18rem;">
                                <img src="<?php echo e(url('frontend/assets/illustration/card-ill-1.png')); ?>"
                                    class="card-img-top m-0 p-4" alt="illustration" width="200px">
                                <div class="card-body">
                                    <h5 class="card-title">Forum Diskusi</h5>
                                    <p class="card-text">Tempat untuk berdiskusi dan bertukar pikiran untuk suatu
                                        topik tertentu.</p>
                                    <div class="float-end">
                                        <!-- Button trigger modal -->
                                        
                                        <!-- Modal -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card mx-auto mb-4 mb-lg-0 scale-up" style="width: 18rem;">
                                <img src="<?php echo e(url('frontend/assets/illustration/card-ill-2.png')); ?>"
                                    class="card-img-top m-0 p-4" alt="illustration" width="200px">
                                <div class="card-body">
                                    <h5 class="card-title">Webinar</h5>
                                    <p class="card-text">Menyediakan webinar dengan topik-topik yang menarik tentang
                                        isu terkini</p>
                                    <div class="float-end">
                                        <!-- Button trigger modal -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card mx-auto mb-4 mb-lg-0 scale-up" style="width: 18rem;">
                                <img src="<?php echo e(url('frontend/assets/illustration/card-ill-3.png')); ?>"
                                    class="card-img-top m-0 p-4" alt="illustration" width="200px">
                                <div class="card-body">
                                    <h5 class="card-title">Workshop</h5>
                                    <p class="card-text">Menyediakan pelatihan untuk menambah pengetahuan dalam suatu
                                        bidang</p>
                                    <div class="float-end">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card mx-auto mb-4 mb-lg-0 scale-up" style="width: 18rem;">
                                <img src="<?php echo e(url('frontend/assets/illustration/card-ill-4.png')); ?>"
                                    class="card-img-top m-0 p-4" alt="illustration" width="200px">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus</h5>
                                    <p class="card-text">Menyediakan kursus untuk menggali potensi diri dan menambah
                                        pengalaman</p>
                                    <div class="float-end">
                                        <!-- Button trigger modal -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Our Features -->

        <!-- FAQ -->
        <section class="faq-dropdown" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 d-none d-lg-block">
                        <div class="d-flex justify-content-end align-self-lg-center">
                            <img class="img-fluid" src="<?php echo e(url('frontend/assets/illustration/ill-4.png')); ?>"
                                alt="illustration" width="450px">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="question-col">
                            <h2 class="title text-center text-lg-start">Frequently Asked Questions</h2>
                            <div class="quetion-list">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                Bagaimana cara mengikuti webinar, workshop, dan kursus di Edumind?
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Anda harus melakukan daftar akun atau masuk ke
                                                dalam sistem Edumind. Setelah itu anda dapat memilih event yang diinginkan
                                                lalu klik daftar event.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Bagaimana cara daftar di Edumind?
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Anda dapat menekan tombol masuk atau daftar akun.
                                                Selain itu, anda bisa klik <a href="<?php echo e(route('register')); ?>">ini</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                Bagaimana cara mengunggah program di Edumind?
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Akun anda harus terverifikasi terlebih dahulu, lalu
                                                anda dapat menuju <a
                                                    href="<?php echo e(route('user.upload')); ?>">user/upload-event</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of FAQ -->

        <!-- Tagline -->
        <section class="tagline">
            <div class="container d-flex justify-content-center text-white">
                <h3 class="m-0">Train your mind to see the world in a different way</h3>
            </div>
        </section>
        <!-- ENnd of Tagline -->

        <!-- Testimonial & Article -->
        <section class="testimonial-article" data-aos="fade-up">
            <div class="container mt-3">
                <div class="testimonial-heading mx-auto text-center">
                    <h1>Apa kata mereka?</h1>
                </div>

                <!-- Swiper -->
                <div class="swiper mySwiper mt-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="card scale-up">
                                <div class="card-img d-flex justify-content-center py-4">
                                    <img src="<?php echo e(url('frontend/assets/profile/profile-rine.jpeg')); ?>"
                                        class="img-fluid" alt="Photo-profile">
                                </div>
                                <div class="card-body text-center p-4">
                                    <p class="card-text">Edumind sangat bermanfaat untuk saya, apalagi pada saat
                                        pandemi saat ini sehingga saya bisa lebih mengexplore dan menambah pengetahuan
                                        dengan mengikuti kelas kelas kursus maupun webinar, workshop yang ada di edumind
                                        tanpa ribet. Selain itu, disini juga ada fitur diskusi yang sering saya gunakan juga
                                        untuk bertanya mengenai topik yang ingin saya mengerti.”</p>
                                    <h5 class="card-title">- Rine</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="card scale-up">
                                <div class="card-img d-flex justify-content-center py-4">
                                    <img src="<?php echo e(url('frontend/assets/profile/profile-abdiel.jpeg')); ?>"
                                        class="img-fluid" alt="Photo-profile">
                                </div>
                                <div class="card-body text-center p-4">
                                    <p class="card-text">“Menurut saya edumind menjadi tempat yang cocok untuk belajar
                                        banyak hal terutama pada masa pandemi ini. Bagi saya masa pandemi tidak menghambat
                                        saya untuk mencoba menggali informasi yang ingin saya dapatkan. Selain itu, edumind
                                        juga cocok untuk berdiskusi atau menanyakan hal yang saya kurang pahami. Terima
                                        kasih edumind.”</p>
                                    <h5 class="card-title">- Abdiel</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="card scale-up">
                                <div class="card-img d-flex justify-content-center py-4">
                                    <img src="<?php echo e(url('frontend/assets/profile/profile-sade.png')); ?>"
                                        class="img-fluid" alt="Photo-profile">
                                </div>
                                <div class="card-body text-center p-4">
                                    <p class="card-text">“SIAPAPUN MAKASIH BANGET YG UDAH CIPTAIN EDUMIND, Bermanfaat
                                        bgt buat aku yang pengen sharing atau pengetahuan diluar kampus. Teman-temannya juga
                                        asik banget, materi dari webinar yang disediakan cukup fresh dan insightful.
                                        Tutornya juga menjelaskan dengan mudah sehingga bagi mereka yang belum pernah sama
                                        sekali tau bisa memahami alur dari materi.”</p>
                                    <h5 class="card-title">- Sade</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="card scale-up">
                                <div class="card-img d-flex justify-content-center py-4">
                                    <img src="<?php echo e(url('frontend/assets/profile/profile-ade.jpg')); ?>"
                                        class="img-fluid" alt="Photo-profile">
                                </div>
                                <div class="card-body text-center p-4">
                                    <p class="card-text">“Dulu aku suka bingung cari tempat kursus online yang sesuai
                                        sama aku tapi semenjak ada EBUMIND aku udah nggak bingung lagi, karena EBUMIND
                                        nyediain apa yang aku butuhin. Terima kasih EBUMIND.”</p>
                                    <h5 class="card-title">- Ade</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="card scale-up">
                                <div class="card-img d-flex justify-content-center py-4">
                                    <img src="<?php echo e(url('frontend/assets/profile/profile-ridhal.jpeg')); ?>"
                                        class="img-fluid" alt="Photo-profile">
                                </div>
                                <div class="card-body text-center p-4">
                                    <p class="card-text">“Edumind sangat bermanfaat untuk saya yang suka mengikuti
                                        acara webinar dengan tema informasi teknologi.”</p>
                                    <h5 class="card-title">- Ridhal</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Testimonial -->

        <!-- Article -->
        <section class="article" data-aos="fade-up">
            <div class="container mt-3">
                <div class="article-heading mx-auto">
                    <h1>Artikel Terkini</h1>
                </div>
                <div class="article-cards mt-5">
                    <div class="row slider">
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 col-lg-4 py-3">
                                <div class="card mx-auto scale-up" style="width: 20rem;">
                                    <img src="<?php echo e(Storage::url($article->image)); ?>" class="card-img-top"
                                        alt="illustration">
                                    <div class="card-body">
                                        <p class="card-date"><?php echo e($article->created_at); ?>, <?php echo e($article->author); ?>

                                        </p>
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
            </div>
        </section>
        <!-- End of Article -->
    <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('jsPlus'); ?>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "1",
            coverflowEffect: {
                rotate: 0,
                stretch: 90,
                depth: 260,
                modifier: 0,
                slideShadows: true,
            },
            loop: true,
            breakpoints: {

                // when window width is >= 320px
                320: {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "1",
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 100,
                        modifier: 2,
                        slideShadows: false,
                    },
                    loop: true,
                },
                // when window width is >= 320px
                992: {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "2",
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 90,
                        depth: 300,
                        modifier: 1,
                        slideShadows: false,
                    },
                    loop: true,
                },
            }
        });
    </script>

    <script>
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 1200,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow"><i class="fas fa-chevron-right"></i></span>',
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

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/frontend/index.blade.php ENDPATH**/ ?>