


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>EduMind - Login</title>

    <style>
        @import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", Helvetica, sans-serif;
        }

        body {
            background: #fff;
            background-repeat: repeat-y;
            background-size: contain;
        }

        .confirmation {
            min-width: 100vw;
        }

        .confirmation .container {
            background-color: transparent;
        }

        .confirmation .container .card {
            padding: 20px 20px 30px 20px;
            background-color: #A6B1E1;
            border-radius: 16px;
        }

        .confirmation .container .card .card-body {
            padding: 0 0 0 0;
        }

        .confirmation .container .card .card-body .card-title {
            font-size: 20px;
            font-weight: 600;
            color: #424874;
        }

        .confirmation .container .card .card-body .form-label {
            font-size: 16px;
            font-weight: 600;
            color: #424874;
        }

        .confirmation .container .card .card-body .form-control {
            background-color: #F9FAFB;
            border-radius: 0px;
        }

        .confirmation .container .card .card-body .btn-login {
            width: 160px;
            background-color: #424874;
            padding: 6px 20px 6px 20px;
            color: #fff;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
        }

        /* End of Login */

        /* Copyright */
        .copyright {
            background-color: #262626;
        }

        /* End of Copyright */

    </style>

</head>

<body>
    <!-- Login -->
    <section class="confirmation">
        <div class="container">
            <div class="logo d-flex justify-content-center py-4">
                <a href="index.html">
                    <img class="img-fluid" src="<?php echo e(asset('frontend')); ?>/assets/ic/logo-horizontal-dark.png"
                        alt="logo" width="360px">
                </a>
            </div>
            <div class="card mx-auto mt-4" style="max-width: 46rem;">
                <div class="card-body px-1 px-lg-5">
                    <h5 class="card-title">Reset Password</h5>
                    <form method="POST" action="<?php echo e(route('password.update')); ?>">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="token" value="<?php echo e($token); ?>">

                        <div class="my-4">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                value="<?php echo e($email ?? old('email')); ?>" required autocomplete="email" autofocus>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="input-data mb-2">
                            <label for="InputPassword1" class="form-label">Kata Sandi</label>
                            <div class="input-group mb-3">
                                <input id="password-field" type="password"
                                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                                    required autocomplete="new-password">
                                <div class="input-group-prepend">
                                    <button class="btn rounded-0 btn-light" type="button">
                                        <h6 toggle="#password-field" class="fa fa-eye show-hide"></h6>
                                    </button>
                                </div>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="input-data mb-3">
                            <label for="InputPassword2" class="form-label">Konfirmasi Kata Sandi</label>
                            <div class="input-group mb-3">
                                <input id="password-confirm" type="Password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                                <div class="input-group-prepend">
                                    <button class="btn rounded-0 btn-light" type="button">
                                        <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="action-btn text-end">
                            <button type="submit" class="btn btn-login">
                                Reset Password
                            </button>
                        </div>
                    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/b3b03a4327.js" crossorigin="anonymous"></script>
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
<?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\edumind\resources\views/auth/passwords/reset.blade.php ENDPATH**/ ?>