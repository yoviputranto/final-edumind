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

                            <!-- article-comment-box -->
                            <div class="article-comment-box mb-5">
                                <h5 class="py-1">Ajukan Pertanyaan</h5>
                                <form action="<?php echo e(route('pertanyaan-saya.store')); ?>" method="post"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-floating">
                                        <textarea class="form-control" id="floatingTextarea" name="pertanyaan"></textarea>
                                        <label for="floatingTextarea">Nanyanya yg sopan ya adick-adick</label>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <!-- <div class="input-group my-3 me-2">
                                                                                                                                                                                    <select class="btn-dropdown custom-select py-1 px-3">
                                                                                                                                                                                        <option value="1" id="public">Public</option>
                                                                                                                                                                                        <option value="2" id="private">Private</option>
                                                                                                                                                                                    </select>
                                                                                                                                                                                </div> -->
                                            <div class="input-group my-3">
                                                <select class="btn-dropdown custom-select py-1 px-3" name="category_id">
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($category->id); ?>" id="category">
                                                            <?php echo e($category->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button type="submit" class="btn p-1 ms-auto">
                                                Tanyakan <span><img class="m-0"
                                                        src="<?php echo e(url('frontend/assets/ic/send.png')); ?>"
                                                        width="20px"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- article-comment-display -->
                            <div class="article-heading mx-auto text-center mb-5">
                                <h2>Pertanyaan Saya</h2>
                            </div>
                            <?php
                                $no = 1;
                            ?>
                            <?php if(Auth::user() && Auth::user()->name): ?>
                                <?php $__currentLoopData = $pertanyaans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pertanyaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="article-comment-display mt-5 mb-3">
                                        <div class="comment-info d-flex justify-content-between">
                                            <div class="d-inline-flex">
                                                <img src="<?php echo e(url('frontend/assets/ic/person-comment.png')); ?>"
                                                    alt="profile-img" width="48px">
                                                <div class="d-block">
                                                    <span class="d-block fw-bold"><?php echo e($pertanyaan->getUser->name); ?></span>
                                                    <span class="d-block">Waktu komentar (Mis: 20 jam yang lalu, 1
                                                        hari
                                                        yang
                                                        lalu,
                                                        dst)</span>
                                                </div>
                                            </div>
                                            <form action="<?php echo e(route('pertanyaan-saya.destroy', $pertanyaan->id)); ?>"
                                                method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" style="background:none;border:none;">
                                                    <img class=""
                                                        src="<?php echo e(url('frontend/assets/ic/delete-svg.svg')); ?>"
                                                        alt="report-img" width="24px">
                                            </form>
                                            </button>
                                        </div>
                                        <div class="comment-text">
                                            <span class="d-block fw-bold my-3"><?php echo e($pertanyaan->pertanyaan); ?></span>
                                        </div>
                                        <div class="like-comment mt-3 d-flex">
                                            <div class="like d-inline align-self-center">
                                                <span>7</span>

                                        <a style="text-decoration: none;color: #000;" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Jawaban
                                          </a>
                                          <img class="me-0"
                                          src="<?php echo e(url('frontend/assets/ic/answer-svg.svg')); ?>" width="20px">
                                          <div class="comment d-inline mx-3 align-self-center">
                                            <span><?php echo e($pertanyaan->getCategory->name); ?></span>
                                          </div>
                                            <div class="collapse" id="collapseExample">

                                                <div class="container">
                                                    <?php $__currentLoopData = $jawabans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($pertanyaan->id == $jawaban->getPertanyaan->id): ?>
                                                            <div class="d-inline-flex mt-5">
                                                                <img src="<?php echo e(url('frontend/assets/ic/person-comment.png')); ?>"
                                                                    alt="profile-img" width="48px">
                                                                <div class="d-block">
                                                                    <span class="d-block fw-bold"><?php echo e($jawaban->getUser->name); ?></span>
                                                                    <span class="d-block">Waktu komentar (Mis: 20 jam yang lalu, 1
                                                                        hari
                                                                        yang
                                                                        lalu,
                                                                        dst)</span>
                                                                </div>
                                                            </div>
                                                            <div class="comment-text mt-0">
                                                                <span class="d-block fw-bold my-3"><?php echo e($jawaban->jawaban); ?></span>
                                                                <button style="background:none;border:none;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?php echo e($jawaban->id); ?>" aria-expanded="false" aria-controls="collapseExample">
                                                                    Reply
                                                                </button>

                                                                <div class="collapse" id="collapseExample<?php echo e($jawaban->id); ?>">
                                                                    <div class="article-comment-box mb-5">
                                                                        <h5 class="py-1">Ajukan Pertanyaan</h5>
                                                                        <form action="<?php echo e(route('jawab-komentar.store')); ?>" method="post"
                                                                            enctype="multipart/form-data">
                                                                            <?php echo csrf_field(); ?>
                                                                            <input type="hidden" name="jawaban_id" value="<?php echo e($jawaban->id); ?>">
                                                                            <div class="form-floating">
                                                                                <textarea class="form-control" id="floatingTextarea" name="pertanyaan"></textarea>
                                                                                <label for="floatingTextarea">Nanyanya yg sopan ya adick-adick</label>
                                                                            </div>
                                                                            <div class="d-flex justify-content-between">
                                                                                <div class="d-flex">
                                                                                    <!-- <div class="input-group my-3 me-2">
                                                                                                                                                                                                                            <select class="btn-dropdown custom-select py-1 px-3">
                                                                                                                                                                                                                                <option value="1" id="public">Public</option>
                                                                                                                                                                                                                                <option value="2" id="private">Private</option>
                                                                                                                                                                                                                            </select>
                                                                                                                                                                                                                        </div> -->
                                                                                    <div class="input-group my-3">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-center">
                                                                                    <button type="submit" class="btn p-1 ms-auto">
                                                                                        Jawab <span><img class="m-0"
                                                                                                src="<?php echo e(url('frontend/assets/ic/send.png')); ?>"
                                                                                                width="20px"></span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet inventore harum totam quia dolorem architecto accusamus adipisci omnis vitae, autem ab similique unde error voluptates nostrum sequi ut assumenda obcaecati.</p>
                                                                  </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <div class="mt-3">
                                    <?php echo $pertanyaans->links(); ?>

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

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/arsyandipratama/laravel8/olivia21/resources/views/user/diskusi/PertanyaanUser/index.blade.php ENDPATH**/ ?>
