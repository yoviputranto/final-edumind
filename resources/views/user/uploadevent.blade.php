@extends('layouts.backend')

@section('content')

    <main class="content dashboard-wrapper">
        <div class="container dashboard-card">
            <section class="rounded bg-white py-4 px-4">
                <h2 class="fw-bold">Welcome, {{ Str::title(Auth::user()->name) }}!</h2>
                <p>Anda ingin mempromosikan event anda? <a href="{{ route('user.upload') }}"
                        class="btn bg-purple px-4 mx-1 mt-2" style="font-size:medium;letter-spacing:2px">Upload Event</a></p>
                <div class="row">
                    <h3 class="mb-4">Daftar Event yang di Upload</h3>
                    @foreach ($events as $event)
                        <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-4">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center mx-auto">
                                            <img src="{{ Storage::url($event->gambar) }}" class="img-fluid rounded-start"
                                                alt="...">
                                        </div>

                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title ps-0">{{ Str::words($event->judul, 3, '') }}
                                            </h5>
                                            <ul class="card-info card-webinar-info ps-0">

                                                <li class="list-unstyled mt-2">
                                                    <img class="d-inline"
                                                        src="{{ url('frontend/assets/ic/calendar.png') }}">
                                                    <p class="d-inline">{{ $event->tanggal }}</p>
                                                </li>
                                                <li class="list-unstyled mt-2">
                                                    <img class="d-inline"
                                                        src="{{ url('frontend/assets/ic/category.png') }}">
                                                    <p class="d-inline">{{ $event->waktu }} WIB
                                                    </p>
                                                </li>
                                                <li class="list-unstyled mt-2">
                                                    <div class="d-flex bd-highlight mb-3">
                                                        <div class="px-1 pt-1 bd-highlight">
                                                            <a href="{{ route('user.detail.uploadevent', $event->slug) }}"
                                                                class="btn bg-purple">Detail</a>
                                                        </div>
                                                        <div class="ms-auto px-1 pt-1  bd-highlight">
                                                            <p class="pt-1">{{ $event->status }}</p>
                                                        </div>
                                                    </div>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $events->links() }}

                {{-- @foreach ($devents as $devent)
                    <div class="col-12 col-lg-3 py-3">
                        <div class="card mx-auto scale-up" style="width: 280px;">
                            <img src="{{ Storage::url($devent->getEvent->gambar) }}" class="card-img-top">
                            <div class="card-body">
                                <ul class="card-info card-webinar-info">
                                    <li class="list-unstyled">
                                        <img class="d-inline" src="{{ url('frontend/assets/ic/title.png') }}">
                                        <p class="d-inline">
                                            {{ Str::words($devent->getEvent->judul, 3, '') }}
                                        </p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline" src="{{ url('frontend/assets/ic/calendar.png') }}">
                                        <p class="d-inline">{{ $devent->getEvent->tanggal }}</p>
                                    </li>
                                    <li class="list-unstyled mt-2">
                                        <img class="d-inline" src="{{ url('frontend/assets/ic/category.png') }}">
                                        <p class="d-inline">{{ $devent->getEvent->getCategory->name }}</p>
                                    </li>
                                </ul>
                                <hr widt>
                                <div class="card-act d-flex justify-content-between mt-3">
                                    <a href="#"
                                        class="btn btn-webinar-price">{{ $devent->getEvent->harga == 0 ? 'Gratis' : 'Rp' . $devent->getEvent->harga }}</a>
                                    <a href="{{ route('detailevent', $devent->getEvent->id) }}"
                                        class="btn btn-primary-none btn-webinar-action">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
                {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Event</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false"></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Contact</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...
                    </div>
                </div> --}}



            </section>
            {{-- <section class="my-4 mx-3">
                <h3><i class="fas fa-chart-bar text-purple me-2"></i> Overview</h3>
                <div class="row my-3">
                    <div class="col-lg-3 mb-3">
                        <div class="card">
                            <div class="card-body d-flex flex-column align-items-end">
                                <p class="py-0 my-0 fs-6 fw-normal"><span class="icon icon-purple me-1"><i
                                            class="fas fa-calendar-week"></i></span> Event yang diikuti</p>
                                <p class="py-0 fs-4 fw-bold">0</p>
                            </div>
                        </div>
                    </div>
                    @if (count($event) > 0)
                        <div class="col-lg-3 mb-3">
                            <div class="card">
                                <div class="card-body d-flex flex-column align-items-end">
                                    <p class="py-0 my-0 fs-6 fw-normal"><span class="icon icon-orange me-1"><i
                                                class="fas fa-calendar-week"></i></span> Event yang diupload</p>
                                    <p class="py-0 fs-4 fw-bold">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="card">
                                <div class="card-body d-flex flex-column align-items-end">
                                    <p class="py-0 my-0 fs-6 fw-normal"><span class="icon icon-green me-1"><i
                                                class="fas fa-users"></i></span> Peserta Semua Events</p>
                                    <p class="py-0 fs-4 fw-bold">555</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="card">
                                <div class="card-body d-flex flex-column align-items-end">
                                    <p class="py-0 my-0 fs-6 fw-normal"><span class="icon icon-yellow me-1"><i
                                                class="fas fa-money-bill"></i></span> Total Penjualan</p>
                                    <p class="py-0 fs-4 fw-bold">Rp1.000.000,00</p>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </section> --}}
        </div>
    </main>

@endsection
