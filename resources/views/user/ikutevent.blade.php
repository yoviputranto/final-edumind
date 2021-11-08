@extends('layouts.backend')

@section('content')

    <main class="content dashboard-wrapper">
        <div class="container dashboard-card">
            <section class="rounded bg-white py-4 px-4">
                <h2 class="fw-bold">Welcome, {{ Str::title(Auth::user()->name) }}!</h2>
                <p>Siap jangkau 1.000.000.000 anak muda yang dapat berpartisipasi dalam event yang kamu adakan</p>
                <a href="{{ route('user.upload') }}" class="btn bg-purple px-4"
                    style="font-size:medium;letter-spacing:2px">Upload Event</a>


                <div class="row mt-4">
                    @foreach ($devents as $devent)
                        @if ($devent->status == 'berhasil')
                            <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-4">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center mx-auto">
                                                <img src="{{ Storage::url($devent->getEvent->gambar) }}"
                                                    class="img-fluid rounded-start" alt="...">
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title ps-0">
                                                    {{ Str::words($devent->getEvent->judul, 3, '') }}
                                                </h5>
                                                <ul class="card-info card-webinar-info ps-0">

                                                    <li class="list-unstyled mt-2">
                                                        <img class="d-inline"
                                                            src="{{ url('frontend/assets/ic/calendar.png') }}">
                                                        <p class="d-inline">{{ $devent->getEvent->tanggal }}</p>
                                                    </li>
                                                    <li class="list-unstyled mt-2">
                                                        <img class="d-inline"
                                                            src="{{ url('frontend/assets/ic/category.png') }}">
                                                        <p class="d-inline">{{ $devent->getEvent->waktu }} WIB
                                                        </p>
                                                    </li>
                                                    <li class="list-unstyled mt-2">
                                                        <a href="{{ route('user.detail.ikutevent', $devent->getEvent->slug) }}"
                                                            class="btn bg-purple">Detail</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif

                    @endforeach
                </div>
                {{ $devents->links() }}


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
