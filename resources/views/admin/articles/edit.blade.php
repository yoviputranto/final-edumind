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
                                    <h2 class=" font-weight-medium text-black mb-2">Edit Artikel</h2>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                                                                                    <div class="d-flex align-items-center justify-content-md-end">
                                                                                        <div class="pr-1 mb-3 mb-xl-0">
                                                                                            <a href="{{ route('category-articles.create') }}"
                                                                                                class="btn btn-primary mb-4">Edit</a>
                                                                                        </div>

                                                                                    </div>
                                                                                </div> -->
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form action="{{ route('articles.update', $articles->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="name">Judul</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Judul artikel" value="{{ $articles->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Kategori</label>
                                            <select class="form-control" name="category_id">
                                                <option value="{{ $articles->category_id }}">Don't Change</option>
                                                @foreach ($category as $cate)
                                                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Isi</label>
                                            <textarea class="form-control" name="body" id="summernote"
                                                placeholder="Isi artikel"
                                                value="{{ $articles->body }}">{!! old('isi', $articles->body ?? '') !!}</textarea>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="name">Author</label>
                                            <input type="text" class="form-control" name="author"
                                                placeholder="Author artikel" value="{{ $articles->author }}">
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="name">Status</label>
                                            <select class="form-control" name="status">
                                                <option value="archived">Archived</option>
                                                <option value="published">Published</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Gambar</label>
                                            <input type="file" class="form-control" name="image" id="customFile">

                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block mt-3">Submit</button>
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

@push('script')
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 200
        });
    </script>
@endpush
