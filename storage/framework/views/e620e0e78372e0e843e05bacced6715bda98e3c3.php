<?php $__env->startPush('stylePlus'); ?>
    <link rel="stylesheet" href="<?php echo e(url('frontend/style/disscussion-timeline-style.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Header -->
    <section class="header">
        <img class="vector-above img-fluid" src="<?php echo e(url('frontend/assets/bg/vector-1.png')); ?>" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="<?php echo e(url('frontend/assets/bg/vector-2.png')); ?>" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid mb-5 ms-1" src="<?php echo e(url('frontend/assets/ic/edumind-header-alt.png')); ?>"
                            alt="logo" width="460px">
                        <h4>Pertanyaan Saya</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="<?php echo e(url('frontend/assets/illustration/ill-8.png')); ?>" alt=""
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
                    <li class="breadcrumb-item"><a href="">Diskusi</a></li>
                    <li class="breadcrumb-item"><a href="Link">Pertanyaan Saya</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Article Body -->
    <section class="article-body">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="article-text">
                        <div class="article-comment mt-4">
                            <!-- article-comment-display -->
                            <div class="article-heading mx-auto text-center mb-5">
                                <h2>Pertanyaan Saya</h2>
                            </div>
                            <?php
                                $no = 1;
                            ?>
                            <?php if(Auth::user() && Auth::user()->name): ?>
                                <div class="article-comment-display mt-5 mb-3">
                                    <div class="comment-info d-flex justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="<?php echo e(url('frontend/assets/ic/person-comment.png')); ?>"
                                                alt="profile-img" width="48px">
                                            <div class="d-block">
                                                <span class="d-block fw-bold"><?php echo e($pertanyaans->getUser->name); ?></span>
                                                <span class="d-block">Waktu komentar (Mis: 20 jam yang lalu, 1
                                                    hari
                                                    yang
                                                    lalu,
                                                    dst)</span>
                                            </div>
                                        </div>
                                        <form action="<?php echo e(route('pertanyaan-saya.destroy', $pertanyaans->id)); ?>"
                                            method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" style="background:none;border:none;">
                                                <img class=""
                                                    src="<?php echo e(url('frontend/assets/ic/delete-svg.svg')); ?>" alt="report-img"
                                                    width="24px">
                                        </form>
                                        </button>
                                    </div>
                                    <div class="comment-text">
                                        <span class="d-block fw-bold my-3"><?php echo e($pertanyaans->pertanyaan); ?></span>
                                    </div>
                                    <div class="like-comment mt-3 d-flex">
                                        <div class="like d-inline align-self-center">
                                            <span>7</span>

                                            <button style="background:none;color:#000;border:none;" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                                aria-expanded="false" aria-controls="collapseExample">
                                                Jawab
                                            </button>
                                            <img class="me-0"
                                                src="<?php echo e(url('frontend/assets/ic/answer-svg.svg')); ?>" width="20px">
                                            <div class="comment d-inline mx-3 align-self-center">
                                                <span><?php echo e($pertanyaans->getCategory->name); ?></span>
                                            </div>
                                            <div class="collapse" id="collapseExample">
                                                <?php $__currentLoopData = $jawabans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($pertanyaans->id == $jawaban->getPertanyaan->id): ?>
                                                        <div class="container">
                                                            <div class="d-inline-flex mt-5">
                                                                <img src="<?php echo e(url('frontend/assets/ic/person-comment.png')); ?>"
                                                                    alt="profile-img" width="48px">
                                                                <div class="d-block">
                                                                    <span
                                                                        class="d-block fw-bold"><?php echo e($jawaban->getUser->name); ?></span>
                                                                    <span
                                                                        class="d-block"><?php echo e($jawaban->created_at); ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="comment-text mt-0">
                                                                <span
                                                                    class="d-block my-3"><?php echo e($jawaban->jawaban); ?></span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="mt-3">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article Sidebar -->
                <div class="col-12 col-lg-3 sidebar d-none d-lg-block mt-4">
                    <div class="article-category-alt mb-4">
                        <div class="article-heading d-flex justify-content-center">
                            <img src="<?php echo e(url('frontend/assets/ic/category-svg.svg')); ?>" class="d-inline"
                                width="18px">
                            <h4 class="d-inline pt-1">Topik</h4>
                        </div>
                        <div class="article-list mt-2">
                            <ul>
                                <li><a href="" class="active">Topik 1</a></li>
                                <li><a href="">Topik 2</a></li>
                                <li><a href="">Topik 3</a></li>
                                <li><a href="">Topik 4</a></li>
                                <li><a href="">Topik 5</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="article-category mb-4 d-none">
                        <div class="article-heading">
                            <img src="<?php echo e(url('frontend/assets/ic/category-article.png')); ?>" class="d-inline"
                                width="18px">
                            <h4 class="d-inline">Kategori Artikel</h4>
                        </div>
                        <div class="article-list">
                            <ul class="px-0 pb-3">
                                <li class="text-black list-unstyled">Semua</li>
                                <li class="text-black list-unstyled">Kategori</li>
                                <li class="text-black list-unstyled">Kategori</li>
                                <li class="text-black list-unstyled">Kategori</li>
                                <li class="text-black list-unstyled">Kategori</li>
                            </ul>
                        </div>
                    </div>
                    <div class="article-newest mb-4 d-none">
                        <div class="article-heading">
                            <img src="<?php echo e(url('frontend/assets/ic/article.png')); ?>" class="d-inline" width="18px">
                            <h4 class="d-inline">Artikel Terkini</h4>
                        </div>
                        <div class="article-list">
                            <div class="article-card p-3">
                                <img class="img-fluid mx-0 mb-2" src="<?php echo e(url('frontend/assets/ic/blank.png')); ?>" alt="">
                                <p>31 Agustus 2021, Admin</p>
                                <h4>Judul artikel yang panjang lebih dari 2 baris</h4>
                                <div class="card-act d-flex justify-content-between mt-3 px-0 pb-3">
                                    <span>Kategori</span>
                                    <a href="#" class="btn ">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="article-card p-3">
                                <img class="img-fluid mx-0 mb-2" src="<?php echo e(url('frontend/assets/ic/blank.png')); ?>" alt="">
                                <p>31 Agustus 2021, Admin</p>
                                <h4>Judul artikel yang panjang lebih dari 2 baris</h4>
                                <div class="card-act d-flex justify-content-between mt-3 px-0 pb-3">
                                    <span>Kategori</span>
                                    <a href="#" class="btn ">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="article-card p-3">
                                <img class="img-fluid mx-0 mb-2" src="<?php echo e(url('frontend/assets/ic/blank.png')); ?>" alt="">
                                <p>31 Agustus 2021, Admin</p>
                                <h4>Judul artikel yang panjang lebih dari 2 baris</h4>
                                <div class="card-act d-flex justify-content-between mt-3 px-0 pb-3">
                                    <span>Kategori</span>
                                    <a href="#" class="btn ">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Article Body -->

    <script>
        var btnJawab = document.querySelector("#btn-jawab")
        var textareaJawab = document.querySelector("#textarea-jawab")
        btnJawab.addEventListener("click", () => {
            textareaJawab.classList.remove("d-none")
        })
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\edumind\resources\views/user/diskusi/PertanyaanUser/show.blade.php ENDPATH**/ ?>
