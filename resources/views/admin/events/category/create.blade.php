@extends('admin.layouts.master')
@section('content')
    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel mx-5">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back
                                        {{ Auth::user()->name }}!</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-4">Tambah</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form action="{{ route('articles.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Judul</label>
                                            <input type="text" class="form-control" name="judul"
                                                placeholder="Judul artikel" value="{{ old('judul') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Isi</label>
                                            <textarea class="form-control" name="isi" id="summernote"
                                                placeholder="Judul artikel" value="{{ old('judul') }}"
                                                required></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
