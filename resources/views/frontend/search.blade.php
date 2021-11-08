@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ asset('frontend/style/search-page.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style/event-style.css') }}">
@endpush

@section('title', '- Pencarian')


@section('content')
    <!-- Header -->
    <section class="header mb-0 d-none">
        <img class="vector-below img-fluid" src="{{ asset('frontend') }}/assets/bg/vector-2.png" width="600px">
        <img class="vector-above img-fluid" src="{{ asset('frontend') }}/assets/bg/vector-1.png" width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text text-center text-lg-start">
                        <h4 class="text-uppercase">Selamat Datang di Situs</h4>
                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/ic/edumind-header.png"
                            alt="Edumind-heading" width="450px">
                        <p>Edumind adalah sebuah situs yang berisi kumpulan event online seperti webinar, workshop,
                            ataupun kursus
                            dan juga terdapat ruang untuk diskusi.</p>
                        <button type="button" class="btn text-white fw-bold">Daftar Akun</button>
                    </div>
                </div>
                <div class="header-img col-12 col-lg-6 d-none d-lg-flex align-items-end">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/illustration/ill-1.png"
                        alt="illustration" width="600px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <!-- Search section -->
    <section class="search-result mb-2">
        <div class="container">
            <div class="search-heading mx-auto text-center">
                <h1>Search "{{ $keyword }}"</h1>
                <p><span>{{ count($events) + count($articles) }} Hasil</span> pencarian ditemukan</p>
            </div>
            @if (count($events) != 0)
                <div class="result-event-heading mt-4">
                    <p>Hasil pencarian dalam <span>"Event"</span></p>
                </div>
                <!-- Event row -->
                <div class="webinar-cards mt-5">
                    <div class="row">
                        @foreach ($events as $event)
                            <div class="col-12 col-lg-3 py-3">
                                <div class="card mx-auto scale-up" style="width: 280px;">
                                    <img src="{{ Storage::url($event->gambar) }}" class="card-img-top">
                                    <div class="card-body">
                                        <ul class="card-info card-webinar-info">
                                            <li class="list-unstyled">
                                                <img class="d-inline"
                                                    src="{{ url('frontend/assets/ic/title.png') }}">
                                                <p class="d-inline">
                                                    {{ Str::words($event->judul, 3, '') }}
                                                </p>
                                            </li>
                                            <li class="list-unstyled mt-2">
                                                <img class="d-inline"
                                                    src="{{ url('frontend/assets/ic/calendar.png') }}">
                                                <p class="d-inline">{{ $event->tanggal }}</p>
                                            </li>
                                            <li class="list-unstyled mt-2">
                                                <img class="d-inline"
                                                    src="{{ url('frontend/assets/ic/category.png') }}">
                                                <p class="d-inline">{{ $event->getCategory->name }}</p>
                                            </li>
                                        </ul>
                                        <hr widt>
                                        <div class="card-act d-flex justify-content-between mt-3">
                                            @if ($event->harga == 0)
                                                <a href="#" class="btn btn-webinar-price">Gratis</a>
                                            @else
                                                <a href="#" class="btn btn-webinar-price">@currency($event->harga)</a>
                                            @endif
                                            <a href="{{ route('detailevent', $event->slug) }}"
                                                class="btn btn-primary-none btn-webinar-action">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach





                    </div>
                </div>
            @endif
            @if (count($articles) != 0)


                <div class="result-article-heading mt-5">
                    <p>Hasil pencarian dalam <span>"Artikel"</span></p>
                </div>
                <!-- Article row -->
                <div class="article-cards mt-5">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-12 col-lg-4 mt-4">
                                <div class="card" style="width: 20rem;">
                                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-date">31 Agustus 2021, Admin</p>
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
            @endif
        </div>
    </section>
    <!-- End of Search section -->
@endsection
