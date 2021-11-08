@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="{{ url('frontend/style/upload-event-style.css') }}">
@endpush

@section('title', '- Detail Event')

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
                            alt="logo" width="460px">
                        <h4>{{ $event->getJenis->name }}</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ url('frontend/assets/illustration/ill-7.png') }}" alt=""
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
                    <li class="breadcrumb-item"><a href="{{ route('event') }}">Event</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('detailevent', $event->slug) }}">Detail Event</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Event-detail -->
    <section class="event-detail mb-5">
        <div class="container mt-3">
            <div class="event-detail-heading mx-auto text-center mb-4">
                <a class="text-decoration-none" href="">
                    <h1>Detail {{ $event->getJenis->name }}</h1>
                </a>
            </div>
            <div class="event-detail-body">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <img class="event-img" src="{{ Storage::url($event->gambar) }}" alt="poster event"
                            width="400px">
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="event-desc">
                            <h2>{{ $event->judul }}</h2>
                            <p>{!! $event->deskripsi !!}</p>
                            <div class="event-date d-inline-block">
                                {{ $event->tanggal }}
                            </div>
                            <div class="event-time d-inline-block">
                                Pukul {{ $event->waktu }} WIB - Selesai
                            </div>
                            <div class="event-time d-inline-block">
                                {{ $event->getCategory->name }}
                            </div>
                        </div>
                        <div class="event-desc-list mt-4">
                            <div class="row  mb-3">
                                <div class="col-6">
                                    <div class="event-desc-item">
                                        <h5 class="d-block bg-transparent">Event Organizer.</h5>
                                        <span class="d-inline">{{ $event->event_organizer }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="event-desc-item">
                                        <h5 class="d-block bg-transparent">Biaya Pendaftaran.</h5>
                                        <span class="d-inline">
                                            @currency($event->harga)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="event-desc-item">
                                        <h5 class="d-block bg-transparent">Registrasi.</h5>
                                        <span class="d-inline">{{ $event->registrasi }} -
                                            {{ $event->deadline }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="event-desc-item">
                                        <h5 class="d-block bg-transparent">Social Media.</h5>
                                        <ul class="ps-0 list-group list-group-horizontal">
                                            <li class="list-unstyled"><a href="mailto:{{ $event->email }}"><img
                                                        src="{{ url('frontend/assets/ic/email-svg.svg') }}"
                                                        width="20px"></a></li>
                                            <li class="list-unstyled"><a
                                                    href="https://wa.me/{{ $event->whatsapp }}"><img
                                                        src="{{ url('frontend/assets/ic/whatsapp-svg.svg') }}"
                                                        width="20px"></a></li>
                                            <li class="list-unstyled"><a
                                                    href="https://instagram.com/{{ Str::substr($event->instagram, 1) }}"><img
                                                        src="{{ url('frontend/assets/ic/instagram-svg.svg') }}"
                                                        width="20px"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="event-desc-item d-inline-block">
                                        <h5 class="d-block bg-transparent">Benefit.</h5>
                                        <p>{!! $event->benefit !!}</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="event-desc-item d-inline-block">
                                        <h5 class="d-block bg-transparent">Eligible.</h5>
                                        <p>{!! $event->eligible !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (Auth::user())
                @if (count($devent) == 0)
                    <form action="{{ route('user.devent.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="event_id" value="{{ $event->id }}" hidden>

                        @if ($event->harga == 0)
                            <button href="#" type="submit" class="btn btn-uploaded d-inline mt-4">
                                <div class="row">
                                    <div class="col-7 d-flex justify-content-end pe-2">
                                        Daftar {{ $event->getJenis->name }}
                                    </div>
                                    <div class="col-5 d-flex justify-content-end">
                                        <img class="pt-1"
                                            src="{{ url('frontend/assets/ic/register-svg.svg') }}" width="20px">
                                    </div>
                                </div>
                            </button>
                        @else
                            <button href="#" type="button" class="btn btn-uploaded d-inline mt-4" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <div class="row">
                                    <div class="col-7 d-flex justify-content-end pe-2">
                                        Daftar {{ $event->getJenis->name }}
                                    </div>
                                    <div class="col-5 d-flex justify-content-end">
                                        <img class="pt-1"
                                            src="{{ url('frontend/assets/ic/register-svg.svg') }}" width="20px">
                                    </div>
                                </div>
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="file" name="bukti" class="form-control" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </form>
                @else
                    @if ($eventku->status == 'proses')
                        <a href="{{ route('user.ikutevent') }}" type="submit" class="btn btn-uploaded d-inline mt-4">
                            <div class="row">
                                <div class="col-7 d-flex justify-content-end pe-2">
                                    Akses {{ $event->getJenis->name }}
                                </div>
                                <div class="col-5 d-flex justify-content-end">
                                    <img class="pt-1" src="{{ url('frontend/assets/ic/register-svg.svg') }}"
                                        width="20px">
                                </div>
                            </div>
                        </a>
                    @else
                        <a href="{{ route('user.detail.ikutevent', $eventku->getEvent->slug) }}" type="submit"
                            class="btn btn-uploaded d-inline mt-4">
                            <div class="row">
                                <div class="col-7 d-flex justify-content-end pe-2">
                                    Akses {{ $event->getJenis->name }}
                                </div>
                                <div class="col-5 d-flex justify-content-end">
                                    <img class="pt-1" src="{{ url('frontend/assets/ic/register-svg.svg') }}"
                                        width="20px">
                                </div>
                            </div>
                        </a>
                    @endif

                @endif
            @else
                <form action="{{ route('user.devent.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="event_id" value="{{ $event->id }}" hidden>


                    <button href="" type="submit" class="btn btn-uploaded d-inline mt-4">
                        <div class="row">
                            <div class="col-7 d-flex justify-content-end pe-2">
                                Daftar {{ $event->getJenis->name }}
                            </div>
                            <div class="col-5 d-flex justify-content-end">
                                <img class="pt-1" src="{{ url('frontend/assets/ic/register-svg.svg') }}"
                                    width="20px">
                            </div>
                        </div>
                    </button>

                </form>
            @endif



            <div class="copy-text">
                <input type="text" class="text" value="{{ route('detailevent', $event->slug) }}" readonly
                    style="z-index: -999; position: absolute; bottom: 0;">
                <button type="submit" id="liveToastBtn" class="btn btn-upload d-inline mt-4">
                    <div class="row">
                        <div class="col-7 d-flex justify-content-end copy-text" style="padding-right: 38px;">
                            Copy Link
                        </div>
                        <div class="col-5 d-flex justify-content-end">
                            <img class="pt-1" src="{{ asset('frontend') }}/assets/ic/copy-svg.svg"
                                width="20px">
                        </div>
                    </div>
                </button>
                {{-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> --}}
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        {{-- <div class="toast-header">
                            <strong class="me-auto">Bootstrap</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div> --}}
                        <div class="toast-body">
                            Link telah disalin
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('pdfEvent', $event->slug) }}" type="submit" class="btn btn-upload d-inline mt-4">
                <div class="row">
                    <div class="col-7 d-flex justify-content-end copy-text" style="padding-right: 38px;">
                        Unduh PDF
                    </div>
                    <div class="col-5 d-flex justify-content-end">
                        <i class="far fa-file-pdf pt-1 fa-lg text-black-50" style="width: 35px"></i>
                    </div>
                </div>
            </a>
            {{-- <a href="{{ route('pdfEvent', $event->slug) }}" class="btn btn-uploaded d-inline mt-4">
                <div class="row">
                    <div class="col-7 d-flex justify-content-end pe-2">
                        Akses {{ $event->getJenis->name }}
                    </div>
                    <div class="col-5 d-flex justify-content-end">
                        <img class="pt-1" src="{{ url('frontend/assets/ic/register-svg.svg') }}" width="20px">
                    </div>
                </div>
            </a> --}}
            {{-- <div class="copy-text ms-auto ">
                <input type="text" class="text" value="tampan" readonly
                    style="z-index: 999; position: absolute; right: 0; top: 0;">
                <div class="row">
                    <div class="col-7 d-flex justify-content-end" style="padding-right: 38px;">
                        <button type="submit" class="btn ">Bagikan</button>
                    </div>
                    <div class="col-5 d-flex justify-content-end">
                        <img class="pt-1" src="{{ url('frontend/assets/ic/copy-svg.svg') }}" width="20px">
                    </div>

                </div>

            </div> --}}
        </div>
        </div>
        </div>
    </section>
    <!-- End of Webinar-detail -->
@endsection

@push('jsPlus')

    <script>
        $('.slider-category').slick({
            dots: false,
            infinite: true,
            speed: 1200,
            slidesToShow: 5,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow-category"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow-category"><i class="fas fa-chevron-right"></i></span>',
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
    <script>
        $('.slider-webinar').slick({
            dots: true,
            infinite: true,
            speed: 1200,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow-webinar"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow-webinar"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
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

    <script>
        let copyText = document.querySelector(".copy-text");
        copyText.querySelector("button").addEventListener("click", function() {
            let input = copyText.querySelector("input.text");
            input.select();
            document.execCommand("copy");
        });
        var toastTrigger = document.getElementById('liveToastBtn')
        var toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
            toastTrigger.addEventListener('click', function() {
                var toast = new bootstrap.Toast(toastLiveExample)

                toast.show()
            })
        }
    </script>
    @include('sweetalert::alert')


@endpush
