{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-3" />

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <x-jet-label value="{{ __('Name') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                        :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                        name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation" required
                        autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="terms" name="terms" />
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '">' . __('Privacy Policy') . '</a>',
]) !!}
                            </label>
                        </div>
                    </div>
                @endif

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted mr-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button>
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/ic/Logo-Edumind.ico') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style/signup-style.css') }}">
    <title>EduMind - Signup</title>

</head>

<body>
    <!-- Signup -->
    <section class="signup">
        <div class="container">
            <div class="logo d-flex justify-content-center py-4">
                <a href="index.html">
                    <img class="img-fluid" src="{{ asset('frontend/assets/ic/logo-horizontal-dark.png') }}" alt=""
                        width="360px">
                </a>
            </div>
            <div class="card mx-auto mt-2" style="max-width: 60rem;">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img class="mx-auto d-block pt-5"
                            src="{{ asset('frontend/assets/illustration/login-ill.png') }}" alt="" width="400px">
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body px-1 px-lg-5">
                            <h5 class="card-title text-center">Daftar</h5>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="input-data mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                                    <input type="text"
                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        id="exampleInputName" name="name" required autofocus autocomplete="name">
                                </div>
                                <div class="input-data mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                                    <input type="email"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                                </div>
                                <div class="input-data mb-2">
                                    <label for="exampleInputEmail1" class="form-label">No.Handphone</label>
                                    <input type="string"
                                        class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" name="telephone" required>
                                </div>
                                <div class="input-data mb-2">
                                    <label for="InputPassword1" class="form-label">Kata Sandi</label>
                                    <div class="input-group mb-3">
                                        <input id="password-field" type="password"
                                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
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
                                <div class="action-btn text-center mb-2">
                                    <button type="submit" class="btn btn-signup">
                                        Sign Up
                                    </button>
                                </div>

                                <div class="alt-action-btn text-center">

                                    <div class="action-label text-center mb-3">
                                        <label class="form-check-label align-self-center">Sudah punya akun? <span><a
                                                    type="submit" href="{{ route('login') }}">
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
