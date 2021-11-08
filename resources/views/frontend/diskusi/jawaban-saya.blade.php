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
                        <h4>Jawaban Saya</h4>
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
                    <li class="breadcrumb-item"><a href="Link">Jawaban Saya</a></li>
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
                        <div class="article-heading mx-auto text-center my-5">
                            <h2>Jawaban Saya</h2>
                        </div>
                        <div class="article-comment mt-4">
                            <div class="article-comment-display my-5">
                                <div class="comment-info d-flex justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="{{ url('frontend/assets/ic/person-comment.png') }}" alt="profile-img"
                                            width="48px">
                                        <div class="d-block">
                                            <span class="d-block fw-bold">Nama Pengguna yg Menjawab Pertanyaan</span>
                                            <span class="d-block">Waktu komentar (Mis: 20 jam yang lalu, 1 hari yang
                                                lalu,
                                                dst)</span>
                                        </div>
                                    </div>
                                    <a href="">
                                        <img class="" src="{{ url('frontend/assets/ic/delete-svg.svg') }}"
                                            alt="report-img" width="24px">
                                    </a>
                                </div>
                                <div class="comment-text">
                                    <span class="d-block fw-bold my-3">Pertanyaan yang ditanya oleh pengguna lainnya</span>
                                    <p>
                                        Jawaban yang dijawab oleh pengguna lainnya lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Maecenas sed enim ut sem viverra aliquet eget. (Read more)
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
                                    <div class="copy-text ms-auto">
                                        <input type="text" class="text" value="mmnnn" readonly
                                            style="z-index: 999; position: absolute; right: 0; top: 0;">
                                        <button type="submit" class="btn ">Bagikan<span><img
                                                    class="ms-2"
                                                    src="{{ url('frontend/assets/ic/share.png') }}"
                                                    width="20px"></span></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Article Sidebar -->
                <div class="col-12 col-lg-3 sidebar d-none d-lg-block mt-4">
                    <div class="article-category-alt mb-4">
                        <div class="article-category-sidebar d-flex justify-content-center">
                            <img src="{{ url('frontend/assets/ic/category-svg.svg') }}" class="d-inline"
                                width="18px">
                            <h4 class=" pt-1">Topik</h4>
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

                    <div class="article-category mb-4 d-none">
                        <div class="article-heading">
                            <img src="{{ url('frontend/assets/ic/category-article.png') }}" class="d-inline"
                                width="18px">
                            <h4 class="d-inline">Kategori Artikel</h4>
                        </div>
                        <div class="article-list">
                            <ul class="px-0 pb-3">
                                <li class="text-black list-unstyled">Semua</li>
                                <li class="text-black list-unstyled">Kategori</li>
                                <li class="text-black list-unstyled">Kategori</li>
                                <li class="text-black list-unstyled">Kategori</li>
                                <li class="text-black list-unstyled">Kategori</li>
                            </ul>
                        </div>
                    </div>
                    <div class="article-newest mb-4 d-none">
                        <div class="article-heading">
                            <img src="{{ url('frontend/assets/ic/article.png') }}" class="d-inline" width="18px">
                            <h4 class="d-inline">Artikel Terkini</h4>
                        </div>
                        <div class="article-list">
                            <div class="article-card p-3">
                                <img class="img-fluid mx-0 mb-2" src="{{ url('frontend/assets/ic/blank.png') }}" alt="">
                                <p>31 Agustus 2021, Admin</p>
                                <h4>Judul artikel yang panjang lebih dari 2 baris</h4>
                                <div class="card-act d-flex justify-content-between mt-3 px-0 pb-3">
                                    <span>Kategori</span>
                                    <a href="#" class="btn ">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="article-card p-3">
                                <img class="img-fluid mx-0 mb-2" src="{{ url('frontend/assets/ic/blank.png') }}" alt="">
                                <p>31 Agustus 2021, Admin</p>
                                <h4>Judul artikel yang panjang lebih dari 2 baris</h4>
                                <div class="card-act d-flex justify-content-between mt-3 px-0 pb-3">
                                    <span>Kategori</span>
                                    <a href="#" class="btn ">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="article-card p-3">
                                <img class="img-fluid mx-0 mb-2" src="{{ url('frontend/assets/ic/blank.png') }}" alt="">
                                <p>31 Agustus 2021, Admin</p>
                                <h4>Judul artikel yang panjang lebih dari 2 baris</h4>
                                <div class="card-act d-flex justify-content-between mt-3 px-0 pb-3">
                                    <span>Kategori</span>
                                    <a href="#" class="btn ">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Article Body -->

@endsection
