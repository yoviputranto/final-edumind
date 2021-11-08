@extends('layouts.backend')

@section('content')

    <main class="content dashboard-wrapper">
        <div class="container dashboard-card">
            <section class="rounded bg-white py-4 px-4">
                <div class="card mt-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ Storage::url($event->gambar) }}" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->judul }}</h5>
                                <p class="card-text">{!! old('isi', $event->deskripsi ?? '') !!}
                                </p>
                                <p class="card-text">Rp.{{ $event->harga }}
                                </p>
                                <div class="row pt-0 mt-0">
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-4">Tanggal dan Waktu</h5>
                                        <p>{{ $event->tanggal }} {{ $event->waktu }} WIB</p>

                                    </div>
                                    <div class="col-md-3">
                                        <h5 class="card-title mt-4">Kontak</h5>
                                        <a class=" text-decoration-none text-black" href="mailto:{{ $event->email }}"><i
                                                class="far fa-envelope text-black"></i></a>
                                        <a class=" text-decoration-none text-black"
                                            href="https://instagram.com/{{ Str::substr($event->instagram, 1) }}"><i
                                                class="fab fa-instagram text-black"></i></a>
                                        <a href="https://wa.me/{{ $event->whatsapp }}"><i
                                                class="fab fa-whatsapp text-black"></i></a>
                                    </div>
                                    <div class="col-md-5">
                                        <h5 class="card-title mt-4">Tempat</h5>
                                        <a href="{{ $event->link_zoom }}">Link akses</a>
                                        {{-- <a href="{{ $event->link_event }}">Link event</a> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title mt-4">Eligible</h5>
                                        <p>{!! old('isi', $event->eligible ?? '') !!}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="card-title mt-4">Benefit</h5>
                                        <p>{!! old('isi', $event->benefit ?? '') !!}</p>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-2">
                                        <a href="{{ route('user.ikutevent') }}"
                                            class="btn btn-success bg-purple">Kembali</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

        </div>
    </main>

@endsection
