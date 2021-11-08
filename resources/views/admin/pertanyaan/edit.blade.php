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
                                    <h2 class=" font-weight-medium text-black mb-2"> Ubah pertanyaan</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form action="{{ route('diskusi.update', $pertanyaans->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Kategori</label>
                                            <select class="form-control" name="category_id" required>
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($category as $cate)
                                                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Isi pertanyaan</label>
                                            <textarea class="form-control" name="pertanyaan" id="summernote"
                                                placeholder="Isi artikel" required
                                                value="{{ $pertanyaans->pertanyaan }}">{!! $pertanyaans->pertanyaan !!}</textarea>
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

@push('script')
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 200
        });
    </script>

@endpush
