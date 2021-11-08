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
                    <li class="breadcrumb-item"><a href="">Jawaban Saya</a></li>
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
                        <div class="article-comment mt-4" data-aos="fade-up">
                            @foreach ($jawabans as $jawaban)
                                @if (Auth::user() && Auth::user()->name)
                                    {{-- <div class="article-comment-display mt-3 scale-up">
                                        <div class="comment-info d-flex justify-content-between">
                                            <div class="d-inline-flex">
                                                <img src="{{ url('frontend/assets/ic/person-comment.png') }}"
                                                    alt="profile-img" width="48px">
                                                <div class="d-block">
                                                    <span class="d-block fw-bold">{{ $jawaban->getUser->name }}</span>
                                                    <span class="d-block">{{ $jawaban->created_at }}</span>
                                                </div>
                                            </div>
                                            <a href="">
                                                <img class=""
                                                    src="{{ url('frontend/assets/ic/report.png') }}" alt="report-img"
                                                    width="40px">
                                            </a>
                                        </div>
                                        <div class="comment-text">
                                            <a
                                                href="{{ route('pertanyaan-saya.show', $jawaban->getPertanyaan->id) }}">{{ $jawaban->getPertanyaan->pertanyaan }}</a>
                                            <p>{{ $jawaban->jawaban }}</p>
                                        </div>
                                        <div class="like-comment mt-3 d-flex">
                                            <div class="like d-inline align-self-center">
                                                <span>19.721</span>
                                                <img class="me-0"
                                                    src="{{ url('frontend/assets/ic/like.png') }}" alt="" width="24px">
                                            </div>
                                            <div class="comment d-inline mx-3 align-self-center">
                                                <span>31</span>
                                                <img class="me-0"
                                                    src="{{ url('frontend/assets/ic/commment.png') }}" alt="">
                                            </div>
                                            <div class="comment d-inline mx-3 align-self-center">
                                                <span>Kategori</span>
                                            </div>
                                            <div class="ms-auto">
                                                <button type="submit" class="btn "><span><img
                                                            src="{{ url('frontend/assets/ic/share.png') }}"
                                                            width="20px"></span>
                                                    Bagikan</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="article-comment-display mb-3">
                                        <div class="comment-info d-flex justify-content-between">
                                            <div class="d-inline-flex">
                                                <img src="{{ url('frontend/assets/ic/person-comment.png') }}"
                                                    alt="profile-img" style="max-height: 45px">
                                                <div class="d-block">
                                                    <span class="d-block fw-bold">{{ $jawaban->getUser->name }}</span>
                                                    <span class="d-block">{{ $jawaban->created_at }}</span>
                                                </div>
                                            </div>
                                            @if (Auth::user() && Auth::user()->id == $jawaban->user_id)
                                                <form action="{{ route('jawaban-user.destroy', $jawaban->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" style="background-color: transparent;border:none">
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
                                                            src="{{ url('frontend/assets/ic/like.png') }}" alt=""
                                                            width="24px">
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

                            <div class="mt-3">
                                {{-- {!! $pertanyaans->links() !!} --}}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article Sidebar -->
                {{-- <div class="col-12 col-lg-3 sidebar d-none d-lg-block mt-4">
                    <div class="article-category-alt mb-4">
                        <div class="article-heading d-flex justify-content-center">
                            <img src="{{ url('frontend/assets/ic/category-svg.svg') }}" class="d-inline"
                                width="18px">
                            <h4 class="d-inline pt-1">Topik</h4>
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
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End of Article Body -->


@endsection
