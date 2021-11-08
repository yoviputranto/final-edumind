<?php $__env->startPush('stylePlus'); ?>
    <link rel="stylesheet" href="<?php echo e(url('frontend/style/profile-sejarah-style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('frontend/style/profile-style.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Header -->
    <section class="header">
        <img class="vector-below img-fluid" src="<?php echo e(url('frontend/assets/bg/vector-2.png')); ?>" alt="" width="600px">
        <img class="vector-above img-fluid d-none d-lg-block" src="<?php echo e(url('frontend/assets/bg/vector-1.png')); ?>" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid ms-1" src="<?php echo e(url('frontend/assets/ic/edumind-header-alt.png')); ?>"
                            alt="logo">
                        <h4>Tugas dan Fungsi</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="<?php echo e(url('frontend/assets/illustration/ill-6.png')); ?>" alt=""
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
                    <li class="breadcrumb-item"><a href="Link">Tugas dan Fungsi</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- History -->
    <section class="tugas-fungsi">
        <div class="container mt-5">
            <div class="tugas-fungsi-heading mx-auto text-center mb-5">
                <h1>Tugas</h1>
            </div>
            <div class="tugas-fungsi-body">
                <div class="tugas-body-text px-5">
                    <p>Menyediakan wadah bagi masyarakat yaitu sebagai sarana penyampaian informasi atau pengetahuan
                        serta menjadi ruang diskusi dan bertukar pikiran.
                    </p>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="tugas-fungsi-heading mx-auto text-center mb-5">
                <h1>Fungsi</h1>
            </div>
            <div class="tugas-fungsi-body">
                <div class="fungsi-body-text px-5">
                    <p>Menambah pengetahuan umum dan pengetahuan khusus
                        Menambah relasi dari suatu acara ataupun diskusi
                        Memudahkan penyelenggara acara untuk mempromosikan acaranya
                        Melatih berpikir secara kritis mengenai suatu hal
                        Menjadi tempat bertukar pikiran yang kondusif
                        Memberikan informasi dan pengetahuan yang mengikuti perkembangan zaman
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of History -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/arsyandipratama/laravel8/olivia21/resources/views/frontend/profil/tugas-fungsi.blade.php ENDPATH**/ ?>
