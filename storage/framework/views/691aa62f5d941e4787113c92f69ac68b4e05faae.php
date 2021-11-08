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
                        <h4>Jawaban Saya</h4>
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
                    <li class="breadcrumb-item"><a href="">Jawaban Saya</a></li>
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
                        <div class="article-comment mt-4" data-aos="fade-up">
                            <?php $__currentLoopData = $jawabans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Auth::user() && Auth::user()->name): ?>
                                    
                                    <div class="article-comment-display mb-3">
                                        <div class="comment-info d-flex justify-content-between">
                                            <div class="d-inline-flex">
                                                <img src="<?php echo e(url('frontend/assets/ic/person-comment.png')); ?>"
                                                    alt="profile-img" style="max-height: 45px">
                                                <div class="d-block">
                                                    <span class="d-block fw-bold"><?php echo e($jawaban->getUser->name); ?></span>
                                                    <span class="d-block"><?php echo e($jawaban->created_at); ?></span>
                                                </div>
                                            </div>
                                            <?php if(Auth::user() && Auth::user()->id == $jawaban->user_id): ?>
                                                <form action="<?php echo e(route('jawaban-user.destroy', $jawaban->id)); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button type="submit" style="background-color: transparent;border:none">
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
                                                            src="<?php echo e(url('frontend/assets/ic/like.png')); ?>" alt=""
                                                            width="24px">
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

                            <div class="mt-3">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article Sidebar -->
                
            </div>
        </div>
    </section>
    <!-- End of Article Body -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/user/diskusi/jawabanSaya/index.blade.php ENDPATH**/ ?>