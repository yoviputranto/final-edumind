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
                                    <h2 class=" font-weight-medium text-black mb-2"> Ubah Daftar Event</h2>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                                                                                        <div class="d-flex align-items-center justify-content-md-end">
                                                                                            <div class="pr-1 mb-3 mb-xl-0">
                                                                                                <a href="" class="btn btn-primary mb-4">Tambah
                                                                                                    Kategori</a>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div> -->
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form action="{{ route('daftar-events.update', $devent->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Event</label>
                                            <select class="form-control" name="event_id" required>
                                                <option value="{{ $devent->event_id }}">Jangan diubah</option>
                                                @foreach ($events as $event)
                                                    <option value="{{ $event->id }}">{{ $event->judul }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Nama"
                                                value="{{ $devent->nama }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="proses">Proses</option>
                                                <option value="berhasil">Berhasil</option>
                                            </select>
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
