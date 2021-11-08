@extends('frontend.layouts.master')

@push('stylePlus')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/style/upload-event-style.css') }}">
@endpush

@section('title', '- Upload Event')

@section('content')
    {{-- <!-- Header -->
    <section class="header d-none">
        <img class="vector-above img-fluid" src="./assets/bg/vector-1.png" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="./assets/bg/vector-2.png" alt="" width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text">
                        <img class="img-fluid mb-5 ms-1" src="./assets/ic/edumind-header-alt.png" alt="logo" width="460px">
                        <h4>Event</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="./assets/illustration/ill-7.png" alt="" width="500px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header --> --}}

    {{-- <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container d-flex justify-content-center">
            <nav class="breadcrumb my-2" aria-label="breadcrumb">
                <ol class="list-group list-group-horizontal">
                    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{route('event')}}">Event</a></li>
                    <li class="breadcrumb-item"><a href="Link">Upload</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of Breadcrumb --> --}}

    <!-- Event upload -->
    <section class="event-upload mt-5">
        <div class="container mt-5">
            <!-- Webinar list section -->
            <div class="event-upload-heading mx-auto text-center pt-4 mb-4">
                <div class="text-decoration-none" href="program-webinar-category.html">
                    <h1>Upload</h1>
                </div>
            </div>
            <form action="{{ route('user.upload.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="upload-card mt-5 px-4">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="card-heading text-center my-3">
                                <h4>Detail Acara</h4>
                            </div>
                            <div class="card-body">

                                <div class="row mb-3">
                                    <div class="event-category col-5">
                                        <h6 class="form-heading m-0">Jenis</h6>
                                        <div class="form-check d-inline-block me-3">
                                            <input class="form-check-input" value="1" type="radio" name="id_jenis"
                                                id="eventWebinar" checked required>
                                            <label class="form-check-label" for="via-edumind">
                                                Webinar
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block me-3">
                                            <input class="form-check-input" value="3" type="radio" name="id_jenis"
                                                id="eventCourse">
                                            <label class="form-check-label" for="via-eksternal">
                                                Kursus
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block me-3">
                                            <input class="form-check-input" value="2" type="radio" name="id_jenis"
                                                id="eventWorkshop">
                                            <label class="form-check-label" for="via-eksternal">
                                                Workshop
                                            </label>
                                        </div>
                                    </div>

                                    <div class="event-date col-6">
                                        <h6 class="form-heading m-0">Waktu Pendaftaran</h6>
                                        <div class="form-date d-flex">
                                            <input type="date" name="registrasi"
                                                class="form-control form-input-box date-picker" required>
                                            <span class="align-content-center mx-1 py-1">-</span>
                                            <input type="date" name="deadline"
                                                class="form-control form-input-box date-picker" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0">Judul</h6>
                                        <input type="text" name="judul" placeholder="Type here..."
                                            class="form-control form-input-box" id="input" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0">Event Organizer</h6>
                                        <input type="text" name="event_organizer" placeholder="Type here..."
                                            class="form-control form-input-box" id="input" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0">Deskripsi</h6>
                                        <div class="form-floating">
                                            <textarea class="form-control form-input-textarea"
                                                placeholder="Leave a comment here" id="summernote" name="deskripsi"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-date col-4">
                                        <h6 class="form-heading m-0">Tanggal</h6>
                                        <div class="form-date d-flex">
                                            <input type="date" id="picker-date-event" name="tanggal"
                                                class="form-control form-input-box" required>
                                        </div>
                                    </div>
                                    <div class="event-date col-4">
                                        <h6 class="form-heading m-0">Waktu</h6>
                                        <div class="form-date d-flex">
                                            <input type="time" id="picker-time-start" name="waktu"
                                                class="form-control form-input-box" required>
                                        </div>
                                    </div>
                                    <div class="event-category col-4">
                                        <h6 class="form-heading m-0">Kategori</h6>
                                        <div class="input-group mb-3">
                                            <select class="btn-dropdown custom-select" name="id_category"
                                                id="inputGroupSelect03" required>
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0">Eligible</h6>
                                        <div class="form-floating">
                                            <textarea class="form-control form-input-textarea"
                                                placeholder="Leave a comment here" name="eligible" id="summernote1"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0">Benefit</h6>
                                        <div class="form-floating">
                                            <textarea class="form-control form-input-textarea"
                                                placeholder="Leave a comment here" name="benefit" id="summernote2"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0">Biaya Pendaftaran</h6>
                                        <div class="form-check d-inline-block">
                                            <input class="form-check-input" type="radio" name="harga" id="radio-gratis"
                                                checked>
                                            <label class="form-check-label" for="radio-gratis">
                                                Gratis
                                                <input type="text" name="harga" placeholder="Rp | "
                                                    class="form-control form-input-box" value="0" id="input" hidden>
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block ms-5">

                                            <input class="form-check-input mt-2" type="radio" name="harga" id="radio-bayar">
                                            <label class="form-check-label" for="radio-bayar">
                                                <input type="text" name="harga" placeholder="Rp | "
                                                    class="form-control form-input-box" id="input">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-category" id="registerMethod">
                                        <h6 class="form-heading m-0">Metode Pendaftaran</h6>
                                        <div class="form-check d-inline-block">
                                            <input class="form-check-input" type="radio" name="metodePendaftaran"
                                                id="viaEdumind" checked>
                                            <label class="form-check-label" for="via-edumind">
                                                Via edumind
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block ms-5">
                                            <input class="form-check-input" type="radio" name="metodePendaftaran"
                                                id="viaEksternal">
                                            <label class="form-check-label" for="via-eksternal">
                                                Via eksternal
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="event-category">
                                        <h6 class="form-heading m-0" id="linkHeading">Tautan Virtual Meeting</h6>
                                        <input type="text" name="link_zoom" placeholder="Type here..."
                                            class="form-control form-input-box" id="input" required>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <div class="card-heading-col-5 text-center my-3">
                                <h4>Poster</h4>
                            </div>
                            <div class="row mb-3">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <h6 class="form-heading m-0">Poster Acara</h6>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="gambar" id="inputGroupFile02"
                                                required>
                                        </div>
                                        <div class="d-inline">
                                            <ul>
                                                <li>Ukuran maksimal 2 mb</li>
                                                <li>Rasio poster 4:5 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-heading-col-5 text-center my-3">
                                <h4>Social Media</h4>
                            </div>
                            <div class="row mb-3">
                                <div class="event-category col-6">
                                    <h6 class="form-heading m-0">Email</h6>
                                    <input type="email" name="email" placeholder="Type here..."
                                        class="form-control form-input-box" id="input" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="event-category col-6">
                                    <h6 class="form-heading m-0">WhatsApp</h6>
                                    <input type="text" name="whatsapp" placeholder="wa.me/"
                                        class="form-control form-input-box" id="input" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="event-category col-6">
                                    <h6 class="form-heading m-0">Instagram</h6>
                                    <input type="text" name="instagram" placeholder="instagram.com/"
                                        class="form-control form-input-box" id="input" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-upload d-inline mt-4">
                    <div class="row">
                        <div class="col-7 d-flex justify-content-end pe-5">
                            Upload
                        </div>
                        <div class="col-5 d-flex justify-content-end">
                            <img class="pt-1" src="{{ asset('frontend') }}/assets/ic/upload-svg.svg"
                                width="20px">
                        </div>
                    </div>
                </button>
            </form>
        </div>
    </section>
    <!-- End of Webinar -->
@endsection

@push('jsPlus')

    <script>
        $('#picker-time-start').datetimepicker({
            timepicker: true,
            datepicker: false,
            format: 'H:i',
            value: '09:45',
            hours12: false,
            step: 5
        })

        $('#picker-time-end').datetimepicker({
            timepicker: true,
            datepicker: false,
            format: 'H:i',
            value: '09:45',
            hours12: false,
            step: 5
        })

        $('#picker-date-register-start').datetimepicker({
            timepicker: false,
            datepicker: true,
            format: 'Y/m/d',
            value: '2021/10/10',
            hours12: false,
            step: 5
        })

        $('#picker-date-register-end').datetimepicker({
            timepicker: false,
            datepicker: true,
            format: 'Y/m/d',
            value: '2021/10/10',
            hours12: false,
            step: 5
        })

        $('#picker-date-event').datetimepicker({
            timepicker: false,
            datepicker: true,
            format: 'Y/m/d',
            value: '2021/10/10',
            hours12: false,
            step: 5
        })
    </script>

    <script>
        var viaEdu = document.querySelector("#viaEdumind")
        var viaEks = document.querySelector("#viaEksternal")
        var defaultHeading = document.querySelector("#linkHeading")

        var coursePick = document.querySelector("#eventCourse")
        var webinarPick = document.querySelector("#eventWebinar")
        var workshopPick = document.querySelector("#eventWorkshop")
        var registerMethodSection = document.querySelector("#registerMethod")
        var dropdownCategoryHeading = document.querySelector("#dropdownCategory")

        viaEdu.addEventListener("click", () => {
            defaultHeading.innerHTML = "Tautan Virtual Meeting";
        })
        viaEks.addEventListener("click", () => {
            defaultHeading.innerHTML = "Tautan Pendaftaran Eksternal";
        })
        coursePick.addEventListener("click", () => {
            registerMethodSection.classList.add("d-none");
        })
        webinarPick.addEventListener("click", () => {
            if (registerMethodSection.classList.contains("d-none")) {
                registerMethodSection.classList.remove("d-none");
            }
        })
        workshopPick.addEventListener("click", () => {
            if (registerMethodSection.classList.contains("d-none")) {
                registerMethodSection.classList.remove("d-none");
            }
        })

        document.getElementById("myBtn").addEventListener("click", function() {
            alert("Hello World!");
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script type="text/javascript">
        $('#summernote').summernote({
            height: 200
        });
    </script>
    <script type="text/javascript">
        $('#summernote1').summernote({
            height: 200
        });
    </script>
    <script type="text/javascript">
        $('#summernote2').summernote({
            height: 200
        });
    </script>

@endpush
