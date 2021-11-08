<?php $__env->startPush('stylePlus'); ?>
    <link rel="stylesheet" href="<?php echo e(url('frontend/style/article-read-style.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', '- Detail Artikel'); ?>

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
                        <h4>Artikel</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="<?php echo e(url('frontend/assets/illustration/ill-5.png')); ?>" alt=""
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
                    <li class="breadcrumb-item"><a href="">Profile</a></li>
                    <li class="breadcrumb-item"><a href="{{route('sejarah')}}">Sejarah</a></li>
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
                        <div class="article-text-title mt-5">
                            <h1><?php echo e($article->title); ?></h1>
                        </div>
                        <div class="article-text-info d-flex justify-content-between mb-2">
                            <h5>Oleh <?php echo e($article->author); ?></h5>
                            <h5><?php echo e($article->created_at); ?></h5>
                        </div>
                        <div class="article-text-img">
                            <img class="img-fluid" src="<?php echo e(Storage::url($article->image)); ?>" alt="">
                        </div>
                        <div class="article-text-paragraph">
                            <p><?php echo $article->body; ?></p>
                        </div>
                        <div class="article-text-insight d-flex justify-content-between">
                            <div class="like-comment mt-3">
                                <div class="like d-inline">
                                    <span>19.721</span>
                                    <img class="me-0" src="<?php echo e(url('frontend/assets/ic/like.png')); ?>" alt=""
                                        width="24px">
                                </div>
                                <div class="comment d-inline mx-3">
                                    <span>31</span>
                                    <img class="me-0" src="<?php echo e(url('frontend/assets/ic/commment.png')); ?>"
                                        alt="">
                                </div>
                                <span>Kategori</span>
                            </div>
                            <div class="share mt-2">
                                <span>Bagikan</span>
                                <img src="<?php echo e(url('frontend/assets/ic/share.png')); ?>" alt="">
                            </div>
                        </div>

                        <div class="article-comment mt-3">
                            <div class="article-comment-box">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Komennya yg sopan ya adick-adick</label>
                                </div>
                                <div class="d-flex">
                                    <button type="submit" class="btn  ms-auto">Kirim</button>
                                </div>
                            </div>
                            <div class="article-comment-display mt-3">
                                <div class="comment-info d-flex justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="<?php echo e(url('frontend/assets/ic/person-comment.png')); ?>" alt="profile-img"
                                            width="48px">
                                        <div class="d-block">
                                            <span class="d-block fw-bold">Nama pengguna</span>
                                            <span class="d-block">Waktu komentar (Mis: 20 jam yang lalu, 1 hari yang
                                                lalu, dst)</span>
                                        </div>
                                    </div>
                                    <a href="">
                                        <img class="" src="<?php echo e(url('frontend/assets/ic/report.png')); ?>"
                                            alt="report-img" width="40px">
                                    </a>
                                </div>
                                <div class="comment-text">
                                    <p>
                                        Komentar yang dikirim oleh pengguna lainnya lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                                <div class="like-comment mt-3 d-flex">
                                    <div class="like d-inline align-self-center">
                                        <span>19.721</span>
                                        <img class="me-0" src="<?php echo e(url('frontend/assets/ic/like.png')); ?>" alt=""
                                            width="24px">
                                    </div>
                                    <div class="comment d-inline mx-3 align-self-center">
                                        <span>31</span>
                                        <img class="me-0" src="<?php echo e(url('frontend/assets/ic/commment.png')); ?>"
                                            alt="">
                                    </div>
                                    <div class="ms-auto">
                                        <button type="submit" class="btn ">Balas</button>
                                    </div>
                                </div>
                            </div>

                            <div class="article-comment-reply mt-3 ps-5">
                                <div class="article-comment-box">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here"
                                            id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Balasnya yg sopan ya adick-adick</label>
                                    </div>
                                    <div class="d-flex">
                                        <button type="submit" class="btn  ms-auto">Kirim</button>
                                    </div>
                                </div>
                                <div class="article-comment-display mt-3">
                                    <div class="comment-info d-flex justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="<?php echo e(url('frontend/assets/ic/person-comment.png')); ?>"
                                                alt="profile-img" width="48px">
                                            <div class="d-block">
                                                <span class="d-block fw-bold">Nama pengguna</span>
                                                <span class="d-block">Waktu komentar (Mis: 20 jam yang lalu, 1 hari
                                                    yang lalu, dst)</span>
                                            </div>
                                        </div>
                                        <a class="report" href="">
                                            <img class="" src="<?php echo e(url('frontend/assets/ic/report.png')); ?>"
                                                alt="report-img" width="40px">
                                        </a>
                                    </div>
                                    <div class="comment-text">
                                        <p>
                                            Komentar yang dikirim oleh pengguna lainnya lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua.
                                        </p>
                                    </div>
                                    <div class="like-comment mt-3 d-flex">
                                        <div class="like d-inline align-self-center">
                                            <span>19.721</span>
                                            <img class="me-0" src="<?php echo e(url('frontend/assets/ic/like.png')); ?>"
                                                alt="" width="24px">
                                        </div>
                                        <div class="comment d-inline mx-3 align-self-center">
                                            <span>31</span>
                                            <img class="me-0"
                                                src="<?php echo e(url('frontend/assets/ic/commment.png')); ?>" alt="">
                                        </div>
                                        <div class="ms-auto">
                                            <button type="submit" class="btn ">Balas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article Sidebar -->
                <div class="col-12 col-lg-3 sidebar d-none d-lg-block">
                    <div class="newest-article">
                        <div class="article-heading text-center">
                            <img src="<?php echo e(url('frontend/assets/ic/article-svg.svg')); ?>" class="d-inline"
                                width="18px">
                            <h4 class="d-inline">Kategori Artikel</h4>
                        </div>
                        <div class="article-list mt-4">
                            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row article-item my-3">
                                    <div class="col-6 article-img">
                                        <img class="img-fluid pt-3" src="<?php echo e(Storage::url($article->image)); ?>"
                                            alt="article-img" width="140px">
                                    </div>
                                    <div class="col-6">
                                        <p><?php echo e($article->created_at); ?>, <?php echo e($article->author); ?></p>
                                        <a href="<?php echo e(route('detailarticle', $article->slug)); ?>"
                                            class="text-decoration-none text-black">
                                            <h4><?php echo e(Str::words($article->title, 5, '')); ?></h4>
                                        </a>


                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Article Body -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\edumind\resources\views/frontend/detailarticle.blade.php ENDPATH**/ ?>
