<?php
use App\Models\LikePertanyaan;
use App\Models\Admin\Jawaban;
use App\Models\LikeJawaban;
?>


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
                        <h4>Timeline</h4>
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
                    <li class="breadcrumb-item"><a href="<?php echo e(route('beranda')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="">Diskusi</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('timeline.index')); ?>">Timeline</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Article Body -->
    <section class="article-body" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="article-text">
                        <div class="article-comment mt-4">
                            <!-- article-comment-box -->
                            <div class="article-comment-box mb-5">
                                <h5 class="py-1">Ajukan Pertanyaan</h5>
                                <form action="<?php echo e(route('pertanyaan.store')); ?>" method="post"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-floating">
                                        <textarea class="form-control" id="floatingTextarea" name="pertanyaan"></textarea>
                                        <label for="floatingTextarea">Silahkan ajukan pertanyaan</label>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="input-group my-3">
                                                <select class="btn-dropdown custom-select py-1 px-1 rounded-3"
                                                    style="background-color: #f4eeff" name="category_id">
                                                    <option value="">Pilih Kategori</option>
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
                            <?php $__currentLoopData = $pertanyaans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pertanyaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="article-comment-display my-3 py-3">
                                    <div class="comment-info d-flex justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="<?php echo e(url('frontend/assets/ic/person-comment.png')); ?>"
                                                alt="profile-img" style="max-height: 45px">
                                            <div class="d-block">
                                                <span class="d-block fw-bold"><?php echo e($pertanyaan->getUser->name); ?></span>
                                                <span class="d-block"
                                                    style="font-size: 14px"><?php echo e($pertanyaan->created_at); ?></span>
                                            </div>
                                        </div>
                                        <?php if(Auth::user() && Auth::user()->id == $pertanyaan->user_id): ?>
                                            <form action="<?php echo e(route('pertanyaan.destroy', $pertanyaan->id)); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" style="background-color: transparent;border:none">
                                                    <i class="fas fa-trash text-black-50"></i>
                                                </button>

                                            </form>
                                        <?php endif; ?>
                                    </div>
                                    <div class="comment-text">
                                        <span class="d-block fw-bold my-3"><?php echo e($pertanyaan->pertanyaan); ?></span>
                                    </div>
                                    <div class="like-comment mt-3 d-flex">
                                        <div class="like d-inline align-self-center">

                                            <?php if(count($like_pertanyaan) == null): ?>
                                                <a href="<?php echo e(route('likepertanyaan', $pertanyaan->id)); ?>"
                                                    class="text-decoration-none text-black">
                                                    <span><?php echo e(count($like_pertanyaan)); ?></span>
                                                    <i class="far fa-heart text-black-50 mr-1"></i>
                                                </a>
                                            <?php else: ?>

                                                <a href="<?php echo e(route('likepertanyaan', $pertanyaan->id)); ?>"
                                                    class="text-decoration-none text-black">
                                                    <?php
                                                        $likes = LikePertanyaan::where('pertanyaan_id', $pertanyaan->id)->get();
                                                    ?>
                                                    <span><?php echo e(count($likes)); ?></span>
                                                    <?php if(Auth::user()): ?>
                                                        <?php
                                                            $islike = LikePertanyaan::where('pertanyaan_id', $pertanyaan->id)
                                                                ->where('user_id', Auth::user()->id)
                                                                ->get();
                                                        ?>
                                                        <?php if(count($islike) == 0): ?>
                                                            
                                                            <i class="far fa-heart text-black-50 mr-1"></i>
                                                        <?php else: ?>
                                                            
                                                            <i class="fas fa-heart text-black-50 mr-1"></i>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <i class="far fa-heart text-black-50 mr-1"></i>
                                                    <?php endif; ?>


                                                </a>
                                            <?php endif; ?>

                                        </div>
                                        <div class="like d-inline align-self-center ml-1">
                                            <a style="color:#000;text-decoration:none;" data-bs-toggle="collapse"
                                                href="#collapseExample<?php echo e($pertanyaan->id); ?>" role="button"
                                                aria-expanded="false" aria-controls="collapseExample">
                                                <?php
                                                    $totalJawaban = Jawaban::where('pertanyaan_id', $pertanyaan->id)->get();
                                                ?>
                                                <span class="ml-2"><?php echo e(count($totalJawaban)); ?></span>
                                                <i class="fas fa-comment-dots text-black-50"></i>


                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="collapse" id="collapseExample<?php echo e($pertanyaan->id); ?>">
                                        <div class="article-comment-box mt-3">
                                            <h5 class="py-1">Ajukan Jawaban</h5>
                                            <form action="<?php echo e(route('jawaban-user.store')); ?>" method="post"
                                                enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <?php $__currentLoopData = $jawabans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="hidden" name="pertanyaan_id"
                                                        value="<?php echo e($pertanyaan->id); ?>">
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="floatingTextarea"
                                                        name="jawaban"></textarea>
                                                    <label for="floatingTextarea">Silahkan ajukan jawaban</label>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <button type="submit" class="btn p-1 ms-auto">
                                                            Kirim <span><img class="m-0"
                                                                    src="<?php echo e(url('frontend/assets/ic/send.png')); ?>"
                                                                    width="20px"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <?php $__currentLoopData = $jawabans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($pertanyaan->id == $jawaban->getPertanyaan->id): ?>
                                                <div class="article-comment-display mt-0">
                                                    <div class="comment-info d-flex justify-content-between">
                                                        <div class="d-inline-flex">
                                                            <img src="<?php echo e(url('frontend/assets/ic/person-comment.png')); ?>"
                                                                alt="profile-img" style="max-height: 45px">
                                                            <div class="d-block">
                                                                <span
                                                                    class="d-block fw-bold"><?php echo e($jawaban->getUser->name); ?></span>
                                                                <span
                                                                    class="d-block"><?php echo e($jawaban->created_at); ?></span>
                                                            </div>
                                                        </div>
                                                        <?php if(Auth::user() && Auth::user()->id == $jawaban->user_id): ?>
                                                            <form
                                                                action="<?php echo e(route('jawaban-user.destroy', $jawaban->id)); ?>"
                                                                method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('delete'); ?>
                                                                <button type="submit"
                                                                    style="background-color: transparent;border:none">
                                                                    <i class="fas fa-trash text-black-50"></i>
                                                                </button>

                                                            </form>
                                                        <?php endif; ?>

                                                    </div>
                                                    <div class="answer-text">
                                                        <span class="d-block mt-0"><?php echo e($jawaban->jawaban); ?></span>
                                                    </div>
                                                    <div class="like-comment mt-1 d-flex">
                                                        <div class="like d-inline align-self-center">

                                                            <?php if(count($like_jawaban) == null): ?>
                                                                <a href="<?php echo e(route('likejawaban', $jawaban->id)); ?>"
                                                                    class="text-decoration-none text-black">
                                                                    <span><?php echo e(count($like_jawaban)); ?></span>
                                                                    <img class="me-0"
                                                                        src="<?php echo e(url('frontend/assets/ic/like.png')); ?>"
                                                                        alt="" width="24px">
                                                                </a>
                                                            <?php else: ?>

                                                                <a href="<?php echo e(route('likejawaban', $jawaban->id)); ?>"
                                                                    class="text-decoration-none text-black">
                                                                    <?php
                                                                        $likes = LikeJawaban::where('jawaban_id', $jawaban->id)->get();
                                                                    ?>
                                                                    <span><?php echo e(count($likes)); ?></span>
                                                                    <?php if(Auth::user()): ?>
                                                                        <?php
                                                                            $islike = LikeJawaban::where('jawaban_id', $jawaban->id)
                                                                                ->where('user_id', Auth::user()->id)
                                                                                ->get();
                                                                        ?>
                                                                        <?php if(count($islike) == 0): ?>
                                                                            
                                                                            <i class="far fa-heart text-black-50"></i>
                                                                        <?php else: ?>
                                                                            
                                                                            <i class="fas fa-heart text-black-50"></i>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <i class="far fa-heart text-black-50"></i>
                                                                    <?php endif; ?>

                                                                </a>
                                                            <?php endif; ?>

                                                        </div>

                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a
                                            href="<?php echo e(route('diskusi.kategori', $category->name)); ?>"><?php echo e($category->name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
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

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/user/diskusi/timeline/index.blade.php ENDPATH**/ ?>