@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/article-read-style.css') }}">
@endpush

@section('title', '- Detail Artikel')

@section('content')

    <!-- Header -->
    <section class="header">
        <img class="vector-above img-fluid" src="{{ url('frontend/assets/bg/vector-1.png') }}" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="{{ url('frontend/assets/bg/vector-2.png') }}" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid mb-5 ms-1" src="{{ url('frontend/assets/ic/edumind-header-alt.png') }}"
                            alt="logo" width="460px">
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
                    <li class="breadcrumb-item"><a href="{{ route('detailarticle', $article->slug) }}">Detail</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Article Body -->
    <section class="article-body mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="article-text">
                        <div class="article-text-title mt-5">
                            <h1>{{ $article->title }}</h1>
                        </div>
                        <div class="article-text-info d-flex justify-content-between mb-2">
                            <h5>Oleh {{ $article->author }}</h5>
                            <h5>{{ $article->created_at }}</h5>
                        </div>
                        <div class="article-text-img">
                            <img class="img-fluid" src="{{ Storage::url($article->image) }}" alt="">
                        </div>
                        <div class="article-text-paragraph">
                            <p>{!! $article->body !!}</p>
                        </div>

                    </div>
                    <a href="{{ route('pdfArticle', $article->slug) }}" class="btn mt-2 text-white"
                        style="background-color: #747DAB;">Unduh PDF <i class="far fa-file-pdf"></i></a>
                </div>

                <!-- Article Sidebar -->
                <div class="col-12 col-lg-3 sidebar d-none d-lg-block">
                    <div class="newest-article">
                        <div class="article-heading text-center">
                            <img src="{{ url('frontend/assets/ic/article-svg.svg') }}" class="d-inline"
                                width="18px">
                            <h4 class="d-inline">Artikel Terkini</h4>
                        </div>
                        <div class="article-list mt-4">
                            @foreach ($articles as $article)
                                <div class="row article-item my-3">
                                    <div class="col-6 article-img">
                                        <img class="img-fluid pt-3" src="{{ Storage::url($article->image) }}"
                                            alt="article-img" width="140px">
                                    </div>
                                    <div class="col-6">
                                        <p>{{ $article->created_at }}, {{ $article->author }}</p>
                                        <a href="{{ route('detailarticle', $article->slug) }}"
                                            class="text-decoration-none text-black">
                                            <h4>{{ Str::words($article->title, 5, '') }}</h4>
                                        </a>


                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Article Body -->


@endsection
