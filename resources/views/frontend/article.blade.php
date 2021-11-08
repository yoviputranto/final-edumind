@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/article-style.css') }}">
@endpush

@section('title', '- Artikel')

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
                            alt="logo">
                        <h4>Artikel</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ url('frontend/assets/illustration/ill-5.png') }}" alt=""
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
                    <li class="breadcrumb-item"><a href="{{ route('article') }}">Artikel</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Article -->
    <section class="article mb-2">
        <div class="container mt-3">
            <div class="article-categories mt-5">
                {{-- <div class="row slider">
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
                        <div class="article-cards mt-5">
                            <div class="row">
                                @foreach ($articles as $article)
                                    <div class="col-12 col-lg-4 py-3">
                                        <div class="card mx-auto scale-up" style="width: 20rem;">
                                            <img src="{{ Storage::url($article->image) }}" class="card-img-top"
                                                alt="illustration">
                                            <div class="card-body">
                                                <p class="card-date">{{ $article->created_at }},
                                                    {{ $article->author }}
                                                </p>
                                                <h5 class="card-title">{{ $article->title }}</h5>
                                                <div class="card-act d-flex justify-content-between mt-3">
                                                    <a href="{{ route('detailarticle', $article->slug) }}"
                                                        class="btn btn-primary">Selengkapnya</a>
                                                    <h5 class="card-date">{{ $article->getCategory->name }}</h5>
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
                            <div class="article-cards mt-5">
                                <div class="row">
                                    @foreach ($articles as $article)
                                        @if ($category->name == $article->getCategory->name)
                                            <div class="col-12 col-lg-4 py-3">
                                                <div class="card mx-auto scale-up" style="width: 20rem;">
                                                    <img src="{{ Storage::url($article->image) }}" class="card-img-top"
                                                        alt="illustration">
                                                    <div class="card-body">
                                                        <p class="card-date">{{ $article->created_at }},
                                                            {{ $article->author }}
                                                        </p>
                                                        <h5 class="card-title">{{ $article->title }}</h5>
                                                        <div class="card-act d-flex justify-content-between mt-3">
                                                            <a href="{{ route('detailarticle', $article->slug) }}"
                                                                class="btn btn-primary">Selengkapnya</a>
                                                            <h5 class="card-date">{{ $article->getCategory->name }}
                                                            </h5>
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
            {{-- <div class="article-cards mt-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card mx-auto scale-up" style="width: 20rem;">
                                <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="illustration">
                                <div class="card-body">
                                    <p class="card-date">{{ $article->created_at }}, {{ $article->author }}
                                    </p>
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <div class="card-act d-flex justify-content-between mt-3">
                                        <a href="{{ route('detailarticle', $article->slug) }}"
                                            class="btn btn-primary">Selengkapnya</a>
                                        <h5 class="card-date">{{ $article->getCategory->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div> --}}
        </div>
    </section>
    <!-- End of Article -->

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

@endpush
