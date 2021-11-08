

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/style/signup-style.css')); ?>">
    <title>EduMind - Signup</title>

</head>

<body>
    <!-- Signup -->
    <section class="signup">
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
                        <img class="mx-auto d-block pt-5"
                            src="<?php echo e(asset('frontend/assets/illustration/login-ill.png')); ?>" alt="" width="400px">
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body px-1 px-lg-5">
                            <h5 class="card-title text-center">Daftar</h5>
                            <form action="<?php echo e(route('register')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="input-data mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                                    <input type="text"
                                        class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>"
                                        id="exampleInputName" name="name" required autofocus autocomplete="name">
                                </div>
                                <div class="input-data mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                                    <input type="email"
                                        class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                                </div>
                                <div class="input-data mb-2">
                                    <label for="exampleInputEmail1" class="form-label">No.Handphone</label>
                                    <input type="string"
                                        class="form-control <?php echo e($errors->has('telephone') ? 'is-invalid' : ''); ?>"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" name="telephone" required>
                                </div>
                                <div class="input-data mb-2">
                                    <label for="InputPassword1" class="form-label">Kata Sandi</label>
                                    <div class="input-group mb-3">
                                        <input id="password-field" type="password"
                                            class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>"
                                            name="password" required>
                                        <div class="input-group-prepend">
                                            <button class="btn rounded-0 btn-light" type="button">
                                                <h6 toggle="#password-field" class="fa fa-eye show-hide"></h6>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-data mb-3">
                                    <label for="InputPassword2" class="form-label">Konfirmasi Kata
                                        Sandi</label>
                                    <div class="input-group mb-3">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required>
                                        <div class="input-group-prepend">
                                            <button class="btn rounded-0 btn-light" type="button">
                                                <i class="fa fa-eye" aria-hidden="true" id="eye"
                                                    onclick="toggle()"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="action-btn text-center">
                                    <button type="submit" class="btn btn-signup">
                                        Sign Up
                                    </button>
                                </div>
                                <div class="action-label text-center">
                                    <label class="form-check-label align-self-center">or login with</label>
                                </div>
                                <div class="alt-action-btn text-center">
                                    <a href="<?php echo e(route('login.facebook')); ?>" class="btn btn-facebook">
                                        <div class="">
                                            <img class=" img-fluid d-inline-block"
                                                src="<?php echo e(asset('frontend/assets/ic/facebook-login.png')); ?>" alt=""
                                                width="20px">
                                            <p class="d-inline-block m-0">Facebook</p>
                                        </div>
                                    </a>
                                    <a href="<?php echo e(route('login.google')); ?>" class="btn btn-google">
                                        <div class="">
                                            <img class=" img-fluid d-inline-block"
                                                src="<?php echo e(asset('frontend/assets/ic/google.png')); ?>" alt=""
                                                width="20px">
                                            <p class="d-inline-block m-0">Google</p>
                                        </div>
                                    </a>
                                    <div class="action-label text-center">
                                        <label class="form-check-label align-self-center">Sudah punya akun? <span><a
                                                    type="submit" href="<?php echo e(route('login')); ?>">
                                                    Masuk
                                                </a></span></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Signup -->

    <!-- Copyright -->
    <section class="copyright fixed-bottom">
        <div class="container text-center p-2">
            <p class="text-white m-0">Edumind @2021. All rights reserved.</p>
        </div>
    </section>
    <!-- End of Copyright -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/b3b03a4327.js" crossorigin="anonymous"></script>
    <script>
        $(".show-hide").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <script>
        var state = false;

        function toggle() {
            if (state) {
                document.getElementById("password-confirm").setAttribute("type", "password");
                document.getElementById("eye").setAttribute("class", "fa fa-eye");
                state = false;
            } else {
                document.getElementById("password-confirm").setAttribute("type", "text");
                document.getElementById("eye").setAttribute("class", "fa fa-eye-slash");
                state = true;
            }
        }
    </script>
</body>

</html>
<?php /**PATH /Users/arsyandipratama/laravel8/olivia21/resources/views/auth/register.blade.php ENDPATH**/ ?>