@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/profile-sejarah-style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/style/profile-style.css') }}">
@endpush

@section('title', '- Infografis')

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
                        <h4>Infografis</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ url('frontend/assets/illustration/ill-6.png') }}" alt=""
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
                    <li class="breadcrumb-item"><a href="">Profile</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('infografis') }}">Infografis</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Infografis -->
    <section class="infografis">
        <div class="container mt-5">
            <div class="infografis-heading mx-auto text-center mb-5">
                <h1>Pentingnya Pendidikan Vokasi</h1>
            </div>
            <div class="infografis-body">
                <div class="row">
                    <div class="col-12 col-lg-4 img-col">
                        <img src="{{ asset('frontend') }}/assets/illustration/ill-14.png" width="260px">
                    </div>
                    <div class="col-12 col-lg-8 text-col">
                        <p>
                            Mengapa Pendidikan Vokasi Penting?
                        </p>
                        <ul>
                            <li>
                                Pendidikan yang mengutamakan keterampilan & keahlian khusus
                            </li>
                            <li>
                                Mahasiswa lulusan vokasi dibekali keterampilan yang dibutuhkan oleh industri
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-lg-8 text-col-alt">
                        <p>
                            Keunggulan Pendidikan Vokasi
                        </p>
                        <ul>
                            <li>
                                Kurikulum dengan porsi yang berbeda dari sarjana, sekitar 60% praktik & 40% teori
                            </li>
                            <li>
                                Umumnya lebih memahami implementasi jurusan di lapangan karena terbiasa praktik
                            </li>
                            <li>
                                Waktu kuliah cenderung lebih singkat
                            </li>
                            <li>
                                Tugas akhir umumnya berupa laporan praktik kerja
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4 img-col-alt">
                        <img src="{{ asset('frontend') }}/assets/illustration/ill-15.png" width="300px">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-lg-4 img-col">
                        <img src="{{ asset('frontend') }}/assets/illustration/ill-16.png" width="260px">
                    </div>
                    <div class="col-12 col-lg-8 text-col">
                        <p>
                            Tahukah kamu?
                        </p>
                        <span>
                            Pengembangan pendidikan vokasi menjadi salah satu prioritas Pemerintah Indonesia dalam
                            mendukung pembangunan Sumber Daya Manusia di masa mendatang
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of History -->
@endsection
