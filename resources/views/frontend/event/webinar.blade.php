@extends('frontend.layouts.master')
@push('stylePlus')
    <link rel="stylesheet" href="{{ asset('frontend/style/program-webinar-style.css') }}">
@endpush

@section('title', '- Event Webinar')

@section('content')
    <!-- Header -->
    <section class="header">
        <img class="vector-above img-fluid" src="{{ asset('frontend') }}/assets/bg/vector-1.png" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="{{ asset('frontend') }}/assets/bg/vector-2.png" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text">
                        <h1>EDUMIND</h1>
                        <h4>Webinar</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ asset('frontend') }}/assets/illustration/ill-7.png" alt=""
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
                    <li class="breadcrumb-item"><a href="{{ route('webinar') }}">Webinar</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Webinar -->
    <section class="webinar mb-2">
        <div class="container mt-3">
            <div class="webinar-categories mt-5">
                {{-- <div class="row ">
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
                </div> --}}
                <div class="d-flex">
                    <ul class="nav nav-pills mb-3 mx-auto" id="pills-tab" role="tablist">
                        <li class="nav-item category-item d-flex justify-content-center" role="presentation">
                            <button class="nav-link btn btn-category active text-white" id="pills-semua-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-semua" type="button" role="tab"
                                aria-controls="pills-semua" aria-selected="true">Semua</button>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav-item category-item d-flex justify-content-center" role="presentation">
                                <button class="nav-link btn btn-category text-white" id="pills-{{ $category->id }}-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-{{ $category->id }}" type="button"
                                    role="tab" aria-controls="pills-{{ $category->id }}"
                                    aria-selected="false">{{ $category->name }}</button>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-semua" role="tabpanel"
                        aria-labelledby="pills-semua-tab">
                        <div class="webinar-cards mt-5">
                            <div class="row">
                                @foreach ($webinars as $webinar)
                                    <div class="col-12 col-lg-3 py-3">
                                        <div class="card mx-auto scale-up" style="width: 280px;">
                                            <img src="{{ Storage::url($webinar->gambar) }}" class="card-img-top">
                                            <div class="card-body">
                                                <ul class="card-info card-webinar-info">
                                                    <li class="list-unstyled">
                                                        <img class="d-inline"
                                                            src="{{ url('frontend/assets/ic/title.png') }}">
                                                        <p class="d-inline">
                                                            {{ Str::words($webinar->judul, 3, '') }}
                                                        </p>
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
                                                        <a href="#"
                                                            class="btn btn-webinar-price">@currency($webinar->harga)</a>
                                                    @endif
                                                    <a href="{{ route('detailevent', $webinar->id) }}"
                                                        class="btn btn-primary-none btn-webinar-action">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    @foreach ($categories as $category)
                        <div class="tab-pane fade" id="pills-{{ $category->id }}" role="tabpanel"
                            aria-labelledby="pills-{{ $category->id }}-tab">
                            <div class="webinar-cards mt-5">
                                <div class="row">
                                    @foreach ($webinars as $webinar)
                                        @if ($webinar->getCategory->name == $category->name)
                                            <div class="col-12 col-lg-3 py-3">
                                                <div class="card mx-auto scale-up" style="width: 280px;">
                                                    <img src="{{ Storage::url($webinar->gambar) }}"
                                                        class="card-img-top">
                                                    <div class="card-body">
                                                        <ul class="card-info card-webinar-info">
                                                            <li class="list-unstyled">
                                                                <img class="d-inline"
                                                                    src="{{ url('frontend/assets/ic/title.png') }}">
                                                                <p class="d-inline">
                                                                    {{ Str::words($webinar->judul, 3, '') }}
                                                                </p>
                                                            </li>
                                                            <li class="list-unstyled mt-2">
                                                                <img class="d-inline"
                                                                    src="{{ url('frontend/assets/ic/calendar.png') }}">
                                                                <p class="d-inline">{{ $webinar->tanggal }}</p>
                                                            </li>
                                                            <li class="list-unstyled mt-2">
                                                                <img class="d-inline"
                                                                    src="{{ url('frontend/assets/ic/category.png') }}">
                                                                <p class="d-inline">
                                                                    {{ $webinar->getCategory->name }}
                                                                </p>
                                                            </li>
                                                        </ul>
                                                        <hr widt>
                                                        <div class="card-act d-flex justify-content-between mt-3">
                                                            <a href="#"
                                                                class="btn btn-webinar-price">{{ $webinar->harga == 0 ? 'Gratis' : 'Rp' . $webinar->harga }}</a>
                                                            <a href="{{ route('detailevent', $webinar->id) }}"
                                                                class="btn btn-primary-none btn-webinar-action">Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>

            <!-- Webinar list section -->
            {{-- <div class="webinar-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="program-webinar-category.html">
                    <h1>Kategori</h1>
                </a>
            </div>
            <div class="webinar-cards mt-5">
                <div class="row slider-webinar">
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline" src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline" src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline" src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline" src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- End of Webinar -->


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
{{-- <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style/program-webinar-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EduMind - Webinar Program</title>

</head>

<body>
    <!-- Navigation Bar -->
    @include('frontend.layouts.navbar')
    <!-- End of Navigation Bar -->

    <!-- Header -->
    <section class="header">
        <img class="vector-above img-fluid" src="{{ asset('frontend') }}/assets/bg/vector-1.png" alt=""
            width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="{{ asset('frontend') }}/assets/bg/vector-2.png"
            alt="" width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text">
                        <h1>EDUMIND</h1>
                        <h4>Webinar</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ asset('frontend') }}/assets/illustration/ill-7.png"
                        alt="" width="500px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container">
            <h5 class="text-white text-center">Beranda > Program > webinar </h5>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Webinar -->
    <section class="webinar">
        <div class="container mt-3">
            <div class="webinar-categories mt-5">
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
                <a class="text-decoration-none" href="program-webinar-category.html">
                    <h1>Kategori</h1>
                </a>
            </div>
            <div class="webinar-cards mt-5">
                <div class="row slider-webinar">
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Webinar -->

    <!-- Webinar -->
    <section class="webinar mt-5">
        <div class="container mt-3">
            <!-- Webinar list section -->
            <div class="webinar-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="#">
                    <h1>Kategori</h1>
                </a>
            </div>
            <div class="webinar-cards mt-5">
                <div class="row slider-webinar">
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Webinar -->

    <!-- Webinar -->
    <section class="webinar mt-5">
        <div class="container mt-3">
            <!-- Webinar list section -->
            <div class="webinar-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="#">
                    <h1>Kategori</h1>
                </a>
            </div>
            <div class="webinar-cards mt-5">
                <div class="row slider-webinar">
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto" style="width: 280px;">
                            <img src="{{ asset('frontend') }}/assets/ic/blank-4x5.png" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/title.png">
                                        <p class="d-inline">Judul</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/calendar.png">
                                        <p class="d-inline">Tanggal</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline"
                                            src="{{ asset('frontend') }}/assets/ic/category.png">
                                        <p class="d-inline">Event</p>
                                    </li>
                                </ul>
                                <div class="card-act d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-primary">Gratis/Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Webinar -->

    <!-- Tagline buttom -->

    <!-- ENnd of Tagline buttom -->

    <!-- Footer -->
    @include('frontend.layouts.footer')
    <!-- End of Footer -->

    <!-- Copyright -->
    <section class="copyright">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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

</body>

</html> --}}
