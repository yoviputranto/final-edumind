@extends('layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/disscussion-timeline-style.css') }}">
@endpush

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
                        <h4>Diskusi</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ url('frontend/assets/illustration/ill-8.png') }}" alt=""
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
                    <li class="breadcrumb-item"><a href="">Diskusi</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('timeline.index') }}">Timeline</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Article Body -->
    <section class="article-body">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="article-text">
                        <div class="article-comment mt-4" data-aos="fade-up">
                            <div class="article-comment-box">
                                <h5 class="py-1">Ajukan Pertanyaan</h5>
                                <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Nanyanya yg sopan ya adick-adick</label>
                                </div>
                                <div class="d-flex">
                                    <div class="dropdown visibility mt-2">
                                        <a class="btn btn-light dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            visibility
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">p</a></li>
                                            <li><a class="dropdown-item" href="#">p</a></li>
                                            <li><a class="dropdown-item" href="#">p</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown category mt-2 ms-2">
                                        <a class="btn btn-light dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            category
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">q</a></li>
                                            <li><a class="dropdown-item" href="#">q</a></li>
                                            <li><a class="dropdown-item" href="#">q </a></li>
                                        </ul>
                                    </div>
                                    <button type="submit" class="btn  ms-auto">
                                        Tanyakan <span><img src="{{ url('frontend/assets/ic/send.png') }}"
                                                width="20px"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="article-comment-display mt-3 scale-up">
                                <div class="comment-info d-flex justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="{{ url('frontend/assets/ic/person-comment.png') }}" alt="profile-img"
                                            width="48px">
                                        <div class="d-block">
                                            <span class="d-block fw-bold">Nama pengguna</span>
                                            <span class="d-block">Waktu komentar (Mis: 20 jam yang lalu, 1 hari yang
                                                lalu, dst)</span>
                                        </div>
                                    </div>
                                    <a href="">
                                        <img class="" src="{{ url('frontend/assets/ic/report.png') }}"
                                            alt="report-img" width="40px">
                                    </a>
                                </div>
                                <div class="comment-text">
                                    <p>
                                        Komentar yang dikirim oleh pengguna lainnya lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                                <div class="like-comment mt-3 d-flex">
                                    <div class="like d-inline align-self-center">
                                        <span>19.721</span>
                                        <img class="me-0" src="{{ url('frontend/assets/ic/like.png') }}" alt=""
                                            width="24px">
                                    </div>
                                    <div class="comment d-inline mx-3 align-self-center">
                                        <span>31</span>
                                        <img class="me-0" src="{{ url('frontend/assets/ic/commment.png') }}"
                                            alt="">
                                    </div>
                                    <div class="comment d-inline mx-3 align-self-center">
                                        <span>Kategori</span>
                                    </div>
                                    <div class="ms-auto">
                                        <button type="submit" class="btn "><span><img
                                                    src="{{ url('frontend/assets/ic/share.png') }}" width="20px"></span>
                                            Bagikan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article Sidebar -->
                <div class="col-12 col-lg-3 sidebar d-none d-lg-block mt-4">
                    <div class="article-category-alt mb-4">
                        <div class="article-heading d-flex justify-content-center">
                            <img src="{{ url('frontend/assets/ic/category-svg.svg') }}" class="d-inline"
                                width="18px">
                            <h4 class="d-inline pt-1">Topik</h4>
                        </div>
                        <div class="article-list mt-2">
                            <ul>
                                <li><a href="" class="active">Topik 1</a></li>
                                <li><a href="">Topik 2</a></li>
                                <li><a href="">Topik 3</a></li>
                                <li><a href="">Topik 4</a></li>
                                <li><a href="">Topik 5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Article Body -->


@endsection
