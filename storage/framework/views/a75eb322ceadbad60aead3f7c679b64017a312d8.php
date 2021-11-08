<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="<?php echo e(asset('frontend/assets/ic/Logo-Edumind.ico')); ?>" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/style/login-style.css')); ?>">
    <title>EduMind - Login</title>

</head>

<body>
    <!-- Login -->
    <section class="login">
        <div class="container">
            <div class="logo d-flex justify-content-center py-4">
                <a href="index.html">
                    <img class="img-fluid" src="<?php echo e(asset('frontend/assets/ic/logo-horizontal-dark.png')); ?>" alt=""
                        width="360px">
                </a>
            </div>
            <div class="card mx-auto mt-2" style="max-width: 60rem;">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img class="mx-auto d-block" src="<?php echo e(asset('frontend/assets/illustration/login-ill.png')); ?>"
                            alt="" width="400px">
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body px-1 px-lg-5">
                            <h5 class="card-title text-center">Masuk</h5>
                            <?php if(session('status')): ?>
                                <div class="alert alert-success mb-3 rounded-0" role="alert">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>
                            <form action="<?php echo e(route('login')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Alamat Email</label>
                                    <input type="email"
                                        class="form-control<?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>"
                                        name="email" :value="old('email')" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                                    <input type="password"
                                        class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                        name="password" required autocomplete="current-password">
                                </div>
                                <div class="mb-3 form-check d-flex justify-content-between">
                                    <div class="login-checkbox">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                                    </div>
                                    <a class="text-decoration-none" href="<?php echo e(route('password.request')); ?>">Lupa
                                        Password?</a>
                                </div>
                                <div class="action-btn text-center mb-2">
                                    <button type="submit" class="btn btn-login">
                                        Login
                                    </button>
                                </div>

                                <div class="alt-action-btn text-center">

                                </div>
                                <div class="action-label text-center mb-2">
                                    <label class="form-check-label align-self-center">Belum punya akun? <span><a
                                                type="submit" href="<?php echo e(route('register')); ?>">
                                                Daftar
                                            </a></span></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Login -->

    <!-- Copyright -->
    <section class="copyright fixed-bottom">
        <div class="container text-center p-2">
            <p class="text-white m-0">Edumind @2021. All rights reserved.</p>
        </div>
    </section>
    <!-- End of Copyright -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/b3b03a4327.js" crossorigin="anonymous"></script>
</body>

</html>
<?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/auth/login.blade.php ENDPATH**/ ?>