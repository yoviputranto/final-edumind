@php
use App\Models\LikePertanyaan;
use App\Models\Admin\Jawaban;
use App\Models\LikeJawaban;
@endphp
@extends('frontend.layouts.master')

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
                        <h4>Timeline</h4>
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
    <section class="article-body" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="article-text">
                        <div class="article-comment mt-4">
                            <!-- article-comment-box -->
                            <div class="article-comment-box mb-5">
                                <h5 class="py-1">Ajukan Pertanyaan</h5>
                                <form action="{{ route('pertanyaan.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating">
                                        <textarea class="form-control" id="floatingTextarea" name="pertanyaan"></textarea>
                                        <label for="floatingTextarea">Silahkan ajukan pertanyaan</label>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="input-group my-3">
                                                <select class="btn-dropdown custom-select py-1 px-1 rounded-3"
                                                    style="background-color: #f4eeff" name="category_id">
                                                    <option value="">Pilih Kategori</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" id="category">
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button type="submit" class="btn p-1 ms-auto">
                                                Tanyakan <span><img class="m-0"
                                                        src="{{ url('frontend/assets/ic/send.png') }}"
                                                        width="20px"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @foreach ($pertanyaans as $pertanyaan)
                                <div class="article-comment-display my-3 py-3">
                                    <div class="comment-info d-flex justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="{{ url('frontend/assets/ic/person-comment.png') }}"
                                                alt="profile-img" style="max-height: 45px">
                                            <div class="d-block">
                                                <span class="d-block fw-bold">{{ $pertanyaan->getUser->name }}</span>
                                                <span class="d-block"
                                                    style="font-size: 14px">{{ $pertanyaan->created_at }}</span>
                                            </div>
                                        </div>
                                        @if (Auth::user() && Auth::user()->id == $pertanyaan->user_id)
                                            <form action="{{ route('pertanyaan.destroy', $pertanyaan->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" style="background-color: transparent;border:none">
                                                    <i class="fas fa-trash text-black-50"></i>
                                                </button>

                                            </form>
                                        @endif
                                    </div>
                                    <div class="comment-text">
                                        <span class="d-block fw-bold my-3">{{ $pertanyaan->pertanyaan }}</span>
                                    </div>
                                    <div class="like-comment mt-3 d-flex">
                                        <div class="like d-inline align-self-center">

                                            @if (count($like_pertanyaan) == null)
                                                <a href="{{ route('likepertanyaan', $pertanyaan->id) }}"
                                                    class="text-decoration-none text-black">
                                                    <span>{{ count($like_pertanyaan) }}</span>
                                                    <i class="far fa-heart text-black-50 mr-1"></i>
                                                </a>
                                            @else

                                                <a href="{{ route('likepertanyaan', $pertanyaan->id) }}"
                                                    class="text-decoration-none text-black">
                                                    @php
                                                        $likes = LikePertanyaan::where('pertanyaan_id', $pertanyaan->id)->get();
                                                    @endphp
                                                    <span>{{ count($likes) }}</span>
                                                    @if (Auth::user())
                                                        @php
                                                            $islike = LikePertanyaan::where('pertanyaan_id', $pertanyaan->id)
                                                                ->where('user_id', Auth::user()->id)
                                                                ->get();
                                                        @endphp
                                                        @if (count($islike) == 0)
                                                            {{-- <img class="me-0 text-black"
                                                        src="{{ url('frontend/assets/ic/like.png') }}" alt=""
                                                        width="24px"> --}}
                                                            <i class="far fa-heart text-black-50 mr-1"></i>
                                                        @else
                                                            {{-- <img class="me-0"
                                                        src="{{ url('frontend/assets/ic/like.png') }}" alt=""
                                                        width="24px"> --}}
                                                            <i class="fas fa-heart text-black-50 mr-1"></i>
                                                        @endif
                                                    @else
                                                        <i class="far fa-heart text-black-50 mr-1"></i>
                                                    @endif


                                                </a>
                                            @endif

                                        </div>
                                        <div class="like d-inline align-self-center ml-1">
                                            <a style="color:#000;text-decoration:none;" data-bs-toggle="collapse"
                                                href="#collapseExample{{ $pertanyaan->id }}" role="button"
                                                aria-expanded="false" aria-controls="collapseExample">
                                                @php
                                                    $totalJawaban = Jawaban::where('pertanyaan_id', $pertanyaan->id)->get();
                                                @endphp
                                                <span class="ml-2">{{ count($totalJawaban) }}</span>
                                                <i class="fas fa-comment-dots text-black-50"></i>


                                            </a>
                                        </div>
                                        {{-- <div class="comment d-inline mx-3 align-self-center">
                                            <span>Kategori</span>
                                        </div> --}}
                                    </div>
                                    <div class="collapse" id="collapseExample{{ $pertanyaan->id }}">
                                        <div class="article-comment-box mt-3">
                                            <h5 class="py-1">Ajukan Jawaban</h5>
                                            <form action="{{ route('jawaban-user.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @foreach ($jawabans as $jawaban)
                                                    <input type="hidden" name="pertanyaan_id"
                                                        value="{{ $pertanyaan->id }}">
                                                @endforeach
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="floatingTextarea"
                                                        name="jawaban"></textarea>
                                                    <label for="floatingTextarea">Silahkan ajukan jawaban</label>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <button type="submit" class="btn p-1 ms-auto">
                                                            Kirim <span><img class="m-0"
                                                                    src="{{ url('frontend/assets/ic/send.png') }}"
                                                                    width="20px"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @foreach ($jawabans as $jawaban)
                                            @if ($pertanyaan->id == $jawaban->getPertanyaan->id)
                                                <div class="article-comment-display mt-0">
                                                    <div class="comment-info d-flex justify-content-between">
                                                        <div class="d-inline-flex">
                                                            <img src="{{ url('frontend/assets/ic/person-comment.png') }}"
                                                                alt="profile-img" style="max-height: 45px">
                                                            <div class="d-block">
                                                                <span
                                                                    class="d-block fw-bold">{{ $jawaban->getUser->name }}</span>
                                                                <span
                                                                    class="d-block">{{ $jawaban->created_at }}</span>
                                                            </div>
                                                        </div>
                                                        @if (Auth::user() && Auth::user()->id == $jawaban->user_id)
                                                            <form
                                                                action="{{ route('jawaban-user.destroy', $jawaban->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    style="background-color: transparent;border:none">
                                                                    <i class="fas fa-trash text-black-50"></i>
                                                                </button>

                                                            </form>
                                                        @endif

                                                    </div>
                                                    <div class="answer-text">
                                                        <span class="d-block mt-0">{{ $jawaban->jawaban }}</span>
                                                    </div>
                                                    <div class="like-comment mt-1 d-flex">
                                                        <div class="like d-inline align-self-center">

                                                            @if (count($like_jawaban) == null)
                                                                <a href="{{ route('likejawaban', $jawaban->id) }}"
                                                                    class="text-decoration-none text-black">
                                                                    <span>{{ count($like_jawaban) }}</span>
                                                                    <img class="me-0"
                                                                        src="{{ url('frontend/assets/ic/like.png') }}"
                                                                        alt="" width="24px">
                                                                </a>
                                                            @else

                                                                <a href="{{ route('likejawaban', $jawaban->id) }}"
                                                                    class="text-decoration-none text-black">
                                                                    @php
                                                                        $likes = LikeJawaban::where('jawaban_id', $jawaban->id)->get();
                                                                    @endphp
                                                                    <span>{{ count($likes) }}</span>
                                                                    @if (Auth::user())
                                                                        @php
                                                                            $islike = LikeJawaban::where('jawaban_id', $jawaban->id)
                                                                                ->where('user_id', Auth::user()->id)
                                                                                ->get();
                                                                        @endphp
                                                                        @if (count($islike) == 0)
                                                                            {{-- <img class="me-0 text-black"
                                                        src="{{ url('frontend/assets/ic/like.png') }}" alt=""
                                                        width="24px"> --}}
                                                                            <i class="far fa-heart text-black-50"></i>
                                                                        @else
                                                                            {{-- <img class="me-0"
                                                        src="{{ url('frontend/assets/ic/like.png') }}" alt=""
                                                        width="24px"> --}}
                                                                            <i class="fas fa-heart text-black-50"></i>
                                                                        @endif
                                                                    @else
                                                                        <i class="far fa-heart text-black-50"></i>
                                                                    @endif

                                                                </a>
                                                            @endif

                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
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
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('diskusi.kategori', $category->name) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Article Body -->

    <script>
        var btnJawab = document.querySelector("#btn-jawab")
        var textareaJawab = document.querySelector("#textarea-jawab")
        btnJawab.addEventListener("click", () => {
            textareaJawab.classList.remove("d-none")
        })
    </script>

@endsection
