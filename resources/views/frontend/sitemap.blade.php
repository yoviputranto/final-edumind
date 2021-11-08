@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/sitemap-style.css') }}">
@endpush

@section('title', '- Sitemap')

@section('content')

    <!-- Header -->
    <section class="header">
        <img class="vector-below img-fluid" src="{{ asset('frontend') }}/assets/bg/vector-2.png" alt="" width="600px">
        <img class="vector-above img-fluid d-none d-lg-block" src="{{ asset('frontend') }}/assets/bg/vector-1.png" alt=""
            width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid ms-1" src="{{ asset('frontend') }}/assets/ic/edumind-header-alt.png"
                            alt="logo">
                        <h4>Sitemap</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ asset('frontend') }}/assets/illustration/ill-6.png" alt=""
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
                    <li class="breadcrumb-item"><a href="{{ route('sitemap') }}">Sitemap</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Sitemap -->
    <section class="sitemap mb-2">
        <div class="container">
            <div class="sitemap-heading mx-auto text-center">
                <h1>Sitemap</h1>
            </div>
            <div class="sitemap-structure mt-4">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <ul>
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Profile</a></li>
                            <ul>
                                <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                                <li><a href="{{ route('tugas') }}">Tugas & Fungsi</a></li>
                                <li><a href="{{ route('infografis') }}">Infografis</a></li>
                                <li><a href="{{ route('struktur') }}">Struktur Organisasi</a></li>
                                <li><a href="{{ route('kontak') }}">Kontak</a></li>
                            </ul>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4">
                        <ul>
                            <li><a href="">Event</a></li>
                            <ul>
                                <li><a href="{{ route('webinar') }}">Webinar</a></li>
                                <li><a href="{{ route('workshop') }}">Workshop</a></li>
                                <li><a href="{{ route('kursus') }}">Kursus</a></li>
                                <li><a href="{{ route('user.upload') }}">Upload Event</a></li>
                            </ul>
                        </ul>
                        <ul>
                            <li><a href="">Diskusi</a></li>
                            <ul>
                                <li><a href="{{ route('timeline.index') }}">Timeline</a></li>
                                <li><a href="{{ route('pertanyaan-saya.index') }}">Pertanyaan Saya</a></li>
                                <li><a href="{{ route('jawaban-saya.index') }}">Jawaban Saya</a></li>
                            </ul>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4">
                        <ul>
                            <li><a href="{{ route('article') }}">Artikel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Sitemap -->

@endsection

@push('jsPlus')



@endpush
