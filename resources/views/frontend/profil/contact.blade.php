@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/user-contact.css') }}">
@endpush

@section('title', '- Kontak')

@section('content')

    <!-- Header -->
    <section class="header">
        <img class="vector-below img-fluid" src="{{ url('frontend/assets/bg/vector-2.png') }}" alt="" width="600px">
        <img class="vector-above img-fluid d-none d-lg-block" src="{{ url('frontend/assets/bg/vector-1.png') }}" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid ms-1" src="{{ url('frontend/assets/ic/edumind-header-alt.png') }}"
                            alt="logo">
                        <h4>Kontak</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ url('frontend/assets/illustration/ill-9.png') }}" alt=""
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
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('kontak') }}">Kontak</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->
    <!-- Contact -->
    <section class="profile contact">
        <div class="container mt-5">
            <div class="profile-heading mx-auto text-center mb-5">
                <div class="row">
                    <div class="col">
                        <h1>Sosial Media & Kontak</h1>
                    </div>
                </div>

            </div>
            <div class="profile-body">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <a href="https://instagram.com/edumind.idn?utm_medium=copy_link" class=" text-decoration-none">
                            <div class="contact-item text-center">
                                <img class="my-2" src="{{ url('frontend/assets/ic/instagram-purple-svg.svg') }}"
                                    width="100px">
                                <h5>Instagram</h5>
                                <p>@edumind.idn</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="https://www.facebook.com/profile.php?id=100074144358440&_rdc=1&_rdr"
                            class=" text-decoration-none">
                            <div class="contact-item text-center">
                                <img class="my-2" src="{{ url('frontend/assets/ic/facebook-purple-svg.svg') }}"
                                    width="100px">
                                <h5>Facebook</h5>
                                <p>Edumind Id</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="https://twitter.com/EdumindIdn?t=lFz1c7bGloT--TBpUrgLWA&s=08"
                            class=" text-decoration-none">
                            <div class="contact-item text-center">
                                <img class="my-2" src="{{ url('frontend/assets/ic/twitter-purple-svg.svg') }}"
                                    width="100px">
                                <h5>Twitter</h5>
                                <p>@edumindIdn</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="https://edumind.id" class=" text-decoration-none">
                            <div class="contact-item text-center">
                                <img class="my-2" src="{{ url('frontend/assets/ic/web-purple-svg.svg') }}"
                                    width="100px">
                                <h5>Situs</h5>
                                <p>edumind.id</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="" class=" text-decoration-none">
                            <div class="contact-item text-center">
                                <img class="my-2" src="{{ url('frontend/assets/ic/phone-purple-svg.svg') }}"
                                    width="100px">
                                <h5>Telepon</h5>
                                <p>089632101841</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="https://wa.me/089632101841" class=" text-decoration-none">
                            <div class="contact-item text-center">
                                <img class="my-2" src="{{ url('frontend/assets/ic/whatsapp-purple-svg.svg') }}"
                                    width="100px">
                                <h5>Whatsapp</h5>
                                <p>089632101841</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="mailto:edumindindonesia@gmail.com" class="text-decoration-none">
                            <div class="contact-item text-center">
                                <img class="my-2" src="{{ url('frontend/assets/ic/email-purple-svg.svg') }}"
                                    width="100px">
                                <h5>Email</h5>
                                <p>edumindindonesia <br> @gmail.com</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="https://t.me/yoviputranto" class="text-decoration-none">
                            <div class="contact-item text-center">
                                <img class="my-2" src="{{ url('frontend/assets/ic/telegram-purple-svg.svg') }}"
                                    width="100px">
                                <h5>Telegram</h5>
                                <p>@edumind.idn</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact -->
    <!-- Email -->
    <section class="profile email-us">
        <div class="container mt-5">
            <div class="profile-heading mx-auto text-center mb-5">
                <h1>Hubungi Kami</h1>
            </div>
            <div class="profile-body">
                <div class="row">
                    <div class="col-12 col-lg-6 px-5">
                        @if (Session::has('message_sent'))
                            {{-- <div class="alert alert-succes" role="alert">
                                {{ Session::get('message_sent') }}
                            </div> --}}
                            {{ Alert::success('Pesan Terkirim', 'Terima kasih, mohon tunggu balasan dari kami') }}
                        @endif
                        <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="name mb-3">
                                <h6 class="form-heading m-0">Nama</h6>
                                <input type="text" placeholder="Type here..." class="form-control form-input-box"
                                    name="name">
                            </div>
                            <div class="email mb-3">
                                <h6 class="form-heading m-0">Email</h6>
                                <input type="email" placeholder="Type here..." class="form-control form-input-box"
                                    id="input" name="email">
                            </div>
                            <div class="message mb-3">
                                <h6 class="form-heading m-0">Pesan</h6>
                                <div class="form-floating">
                                    <textarea class="form-control form-input-textarea" placeholder="Masukkan pesan"
                                        name="pesan"></textarea>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn py-1 px-3 ms-auto"> Kirim <span><img class="m-0"
                                            src="{{ url('frontend/assets/ic/send.png') }}" width="16px"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 ps-5">
                        <img class="img-fluid ms-auto" src="{{ url('frontend/assets/illustration/ill-10.png') }}" alt=""
                            width="360px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Email -->
    <!-- Gmaps -->
    <section class="profile">
        <div class="container my-5">
            <div class="profile-heading mx-auto text-center mb-5">
                <h1>Lokasi Kami</h1>
            </div>
            <iframe class="p-0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4593946726845!2d106.80390371459072!3d-6.589679795234389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d2e602b501%3A0x25a12f0f97fac4ee!2sSchool%20of%20Vocational%20Studies%20-%20IPB%20University!5e0!3m2!1sen!2sid!4v1634432108643!5m2!1sen!2sid"
                width="1320" height="600" style="border:0; margin-left: -12px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <!-- End of Gmaps -->

@endsection

@push('jsPlus')

    <script>
        $('.slider').slick({
            dots: false,
            infinite: true,
            speed: 1200,
            slidesToShow: 5,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
    @include('sweetalert::alert')

@endpush
