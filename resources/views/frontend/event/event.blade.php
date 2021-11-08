@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/program-webinar-style.css') }}">
@endpush

@section('title', '- Event')

@section('content')
    <!-- Header -->
    <section class="header">
        <img class="vector-above img-fluid" src="{{ url('frontend/assets/bg/vector-1.png') }}" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="{{ url('frontend/assets/bg/vector-2.png') }}" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid mb-5 ms-1" src="{{ url('frontend/assets/ic/edumind-header-alt.png') }}"
                            alt="logo" width="460px">
                        <h4>Event</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ url('frontend/assets/illustration/ill-7.png') }}" alt=""
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
                    <li class="breadcrumb-item"><a href="{{ route('event') }}">Event</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Webinar -->
    <section class="webinar">
        <div class="container mt-3">
            <div class="webinar-categories mt-5 d-none">
                <div class="row slider-category">
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category-active text-white">
                            Semua
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                </div>
            </div>

            <!-- Webinar list section -->
            <div class="webinar-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="{{ route('webinar') }}">
                    <h1>Webinar</h1>
                </a>
            </div>
            <div class="webinar-cards mt-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="row slider-webinar">
                    @foreach ($webinars as $webinar)
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ Storage::url($webinar->gambar) }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info card-webinar-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline"> {{ Str::words($webinar->judul, 3, '') }}</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">{{ $webinar->tanggal }}</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/category.png') }}">
                                            <p class="d-inline">{{ $webinar->getCategory->name }}</p>
                                        </li>
                                    </ul>
                                    <hr widt>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        @if ($webinar->harga == 0)
                                            <a href="#" class="btn btn-webinar-price">Gratis</a>
                                        @else
                                            <a href="#" class="btn btn-webinar-price">@currency($webinar->harga)</a>
                                        @endif
                                        <a href="{{ route('detailevent', $webinar->slug) }}"
                                            class="btn btn-primary-none btn-webinar-action">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </section>
    <!-- End of Webinar -->

    <!-- Workshop -->
    <section class="webinar mt-5">
        <div class="container mt-3">
            <!-- Webinar list section -->
            <div class="webinar-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="{{ route('workshop') }}">
                    <h1>Workshop</h1>
                </a>
            </div>
            <div class="webinar-cards mt-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="row slider-webinar">
                    @foreach ($workshops as $workshop)
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ Storage::url($workshop->gambar) }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info card-webinar-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline">{{ Str::words($workshop->judul, 3, '') }}</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">{{ $workshop->tanggal }}</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/category.png') }}">
                                            <p class="d-inline">{{ $workshop->getCategory->name }}</p>
                                        </li>
                                    </ul>
                                    <hr widt>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        @if ($workshop->harga == 0)
                                            <a href="#" class="btn btn-webinar-price">Gratis</a>
                                        @else
                                            <a href="#" class="btn btn-webinar-price">@currency($workshop->harga)</a>
                                        @endif
                                        <a href="{{ route('detailevent', $workshop->slug) }}"
                                            class="btn btn-primary-none btn-webinar-action">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- End of Workshop -->

    <!-- Kursus -->
    <section class="webinar mt-5 mb-2">
        <div class="container mt-3">
            <!-- Webinar list section -->
            <div class="webinar-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="{{ route('kursus') }}">
                    <h1>Kursus</h1>
                </a>
            </div>
            <div class="webinar-cards mt-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="row slider-webinar">
                    @foreach ($kursuss as $kursus)
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card mx-auto scale-up" style="width: 280px;">
                                <img src="{{ Storage::url($kursus->gambar) }}" class="card-img-top">
                                <div class="card-body">
                                    <ul class="card-info card-webinar-info">
                                        <li class="list-unstyled">
                                            <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                            <p class="d-inline">{{ Str::words($kursus->judul, 3, '') }}</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/calendar.png') }}">
                                            <p class="d-inline">{{ $kursus->tanggal }}</p>
                                        </li>
                                        <li class="list-unstyled mt-2">
                                            <img class="d-inline"
                                                src="{{ url('frontend/assets/ic/category.png') }}">
                                            <p class="d-inline">{{ $kursus->getCategory->name }}</p>
                                        </li>
                                    </ul>
                                    <hr widt>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        @if ($kursus->harga == 0)
                                            <a href="#" class="btn btn-webinar-price">Gratis</a>
                                        @else
                                            <a href="#" class="btn btn-webinar-price">@currency($kursus->harga)</a>
                                        @endif

                                        <a href="{{ route('detailevent', $kursus->slug) }}"
                                            class="btn btn-primary-none btn-webinar-action">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End of Kursus -->
@endsection

@push('jsPlus')

    <script>
        $('.slider-category').slick({
            dots: false,
            infinite: true,
            speed: 1200,
            slidesToShow: 5,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow-category"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow-category"><i class="fas fa-chevron-right"></i></span>',
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
    <script>
        $('.slider-webinar').slick({
            dots: true,
            infinite: true,
            speed: 1200,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow-webinar"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow-webinar"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
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

@endpush
