<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo e(asset('frontend/assets/ic/Logo-Edumind.ico')); ?>" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(url('frontend/style/style.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <?php echo $__env->yieldPushContent('stylePlus'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edumind <?php echo $__env->yieldContent('title'); ?></title>

</head>

<body id="top">


    <!-- Navigation Bar -->

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="<?php echo e(url('frontend/assets/ic/logo-horizontal.png')); ?>" alt="logo"
                    width="120px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i title="" class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <?php if(!Auth::user()): ?>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(Route::currentRouteName() == 'beranda' ? 'active' : ''); ?>"
                                aria-current="page" href="<?php echo e(url('/')); ?>">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-black"
                                        href="<?php echo e(url('/profil/sejarah')); ?>">Sejarah</a>
                                </li>
                                <li><a class="dropdown-item text-black"
                                        href="<?php echo e(url('/profil/tugas-dan-fungsi')); ?>">Tugas
                                        &amp; Fungsi</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-black"
                                        href="<?php echo e(url('/profil/infografis')); ?>">Infografis</a></li>
                                <li><a class="dropdown-item text-black" href="<?php echo e(url('/profil/struktur')); ?>">Struktur
                                        Organisasi</a></li>
                                <li><a class="dropdown-item text-black" href="<?php echo e(url('/profil/kontak')); ?>">Kontak</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(Route::currentRouteName() == 'event' ? 'active' : ''); ?>"
                                href="<?php echo e(url('/event')); ?>">Event</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link <?php echo e(Route::currentRouteName() == 'timeline' ? 'active' : ''); ?> dropdown-toggle"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Diskusi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-black"
                                        href="<?php echo e(route('timeline.index')); ?>">Timeline</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(Route::currentRouteName() == 'article' ? 'active' : ''); ?>"
                                href="<?php echo e(url('/artikel')); ?>">Artikel</a>
                        </li>
                        <?php if(Auth::user()): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle pt-1" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="img-fluid m-0"
                                        src="<?php echo e(asset('frontend')); ?>/assets/ic/logged-in-profile.png" alt=""
                                        width="30px">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item text-black"
                                            href="<?php echo e(route('user.index')); ?>">Dashboard</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="<?php echo e(route('logout')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="dropdown-item text-black">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="nav-item log-in">
                                <a class="nav-link text-center text-black fw-bold"
                                    href="<?php echo e(route('login')); ?>">Masuk</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    
                    <form class="d-flex" action="<?php echo e(route('search')); ?>" method="GET">
                        <div class="form-group d-flex">
                            <input name="search"
                                class="form-control form-control-sm me-2 border-white bg-transparent text-white rounded-pill"
                                style="color: white; height: 50%" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-success rounded-circle btn-sm" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>

                    </form>
                </div>
            <?php elseif(Auth::user()): ?>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(Route::currentRouteName() == 'beranda' ? 'active' : ''); ?>"
                                aria-current="page" href="<?php echo e(url('/')); ?>">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-black"
                                        href="<?php echo e(url('/profil/sejarah')); ?>">Sejarah</a>
                                </li>
                                <li><a class="dropdown-item text-black"
                                        href="<?php echo e(url('/profil/tugas-dan-fungsi')); ?>">Tugas
                                        &amp; Fungsi</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-black"
                                        href="<?php echo e(url('/profil/infografis')); ?>">Infografis</a></li>
                                <li><a class="dropdown-item text-black" href="<?php echo e(url('/profil/struktur')); ?>">Struktur
                                        Organisasi</a></li>
                                <li><a class="dropdown-item text-black" href="<?php echo e(url('/profil/kontak')); ?>">Kontak</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(Route::currentRouteName() == 'event' ? 'active' : ''); ?>"
                                href="<?php echo e(url('/event')); ?>">Event</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link <?php echo e(Route::currentRouteName() == 'timeline' ? 'active' : ''); ?> dropdown-toggle"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Diskusi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-black"
                                        href="<?php echo e(route('timeline.index')); ?>">Timeline</a>
                                </li>
                                <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-black"
                                href="<?php echo e(route('pertanyaan-saya.index')); ?>">Pertanyaan saya</a></li>
                        <li><a class="dropdown-item text-black" href="<?php echo e(route('jawaban-saya.index')); ?>">Jawaban
                                saya</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Route::currentRouteName() == 'article' ? 'active' : ''); ?>"
                            href="<?php echo e(url('/artikel')); ?>">Artikel</a>
                    </li>
                    <?php if(Auth::user()): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pt-1" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="img-fluid m-0"
                                    src="<?php echo e(asset('frontend')); ?>/assets/ic/logged-in-profile.png" alt=""
                                    width="30px">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-black"
                                        href="<?php echo e(route('user.index')); ?>">Dashboard</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="<?php echo e(route('logout')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="dropdown-item text-black">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item log-in">
                            <a class="nav-link text-center text-black fw-bold" href="<?php echo e(route('login')); ?>">Masuk</a>
                        </li>
                    <?php endif; ?>
                    </ul>
                    
                    <form class="d-flex" action="<?php echo e(route('search')); ?>" method="GET">
                        <div class="form-group d-flex">
                            <input name="search"
                                class="form-control form-control-sm me-2 border-white bg-transparent text-white rounded-pill"
                                style="color: white; height: 50%" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-success rounded-circle btn-sm" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>

                    </form>
                </div>
            <?php endif; ?>
        </div>
    </nav>
    <!-- End of Navigation Bar -->


    <?php echo $__env->yieldContent('content'); ?>



    <!-- Tagline buttom -->
    <section class="tagline mt-5">
        <div class="container d-flex justify-content-center text-white">
            <h3 class="m-0">Ingin berpartisipasi dalam suatu event atau diskusi? <span><a
                        href="<?php echo e(route('register')); ?>">Daftar
                        Sekarang</a></span></h3>
        </div>
    </section>
    <!-- ENnd of Tagline buttom -->

    <!-- Footer -->
    <footer>
        <div class="container py-5">
            <div class="row text-white">
                <div class="col-6 col-lg-4">
                    <h4>Kontak</h4>
                    <div class="contact-list text-white">
                        <div class="contact-item">
                            <img src="<?php echo e(url('frontend/assets/ic/phone.png')); ?>">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="<?php echo e(url('frontend/assets/ic/whatsapp.png')); ?>">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="<?php echo e(url('frontend/assets/ic/telegram.png')); ?>">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="<?php echo e(url('frontend/assets/ic/email.png')); ?>">
                            <a href="#">edumindindonedia@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h4>Media Sosial</h4>
                    <div class="social-list text-white">
                        <div class="social-item">
                            <img src="<?php echo e(url('frontend/assets/ic/instagram.png')); ?>">
                            <a href="#">instagram</a>
                        </div>
                        <div class="social-item">
                            <img src="<?php echo e(url('frontend/assets/ic/facebook.png')); ?>">
                            <a href="#">facebook</a>
                        </div>
                        <div class="social-item">
                            <img src="<?php echo e(url('frontend/assets/ic/twitter.png')); ?>">
                            <a href="#">twitter</a>
                        </div>
                        <div class="social-item">
                            <img src="<?php echo e(url('frontend/assets/ic/web.png')); ?>">
                            <a href="#">web</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <h4>Sitemap</h4>
                    <div class="sitemap-item">
                        <a href="sitemap-page.html" class="text-white text-decoration-none">sitemap</a>
                    </div>
                </div>
                <div class="col-2">
                    <img src="<?php echo e(url('frontend/assets/ic/logo-vertical.png')); ?>" alt="EduMind-Logo" width="120px">
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Copyright -->
    <section class="copyright">
        <div class="container text-center p-2">
            <p class="text-white m-0">Edumind @2021. All rights reserved.</p>
        </div>
    </section>
    <!-- End of Copyright -->

    <a href="#top"
        style="position:fixed;right:20px;bottom:15px;background:#424874;color:white;padding:10px 15px;border-radius:5px">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/b3b03a4327.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
        integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>



    <?php echo $__env->yieldPushContent('jsPlus'); ?>

</body>

</html>
<?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\edumind\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>