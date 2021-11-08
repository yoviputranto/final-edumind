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
                                    <h2 class=" font-weight-medium text-black mb-2">Tambah Event</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">


                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form action="{{ route('events.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Judul</label>
                                            <input type="text" class="form-control" name="judul"
                                                placeholder="Judul artikel" value="{{ old('judul') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="summernote"
                                                placeholder="Deskripsi event" value="{{ old('deskripsi') }}"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Waktu</label>
                                            <input type="time" class="form-control" name="waktu" placeholder="Waktu"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Tanggal</label>
                                            <input type="date" class="form-control" name="tanggal" placeholder="Tanggal"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Registrasi</label>
                                            <input type="date" class="form-control" name="registrasi"
                                                placeholder="Tanggal Registrasi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Deadline</label>
                                            <input type="date" class="form-control" name="deadline"
                                                placeholder="Akhir Registrasi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for=name>Link Zoom</label>
                                            <input type="text" class="form-control" name="link_zoom"
                                                placeholder="Link Zoom">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Link Event</label>
                                            <input type="text" class="form-control" name="link_event"
                                                placeholder="Link Event">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Event Organizer</label>
                                            <input type="text" class="form-control" name="event_organizer"
                                                placeholder="Event Organizer" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Email"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Whatsapp</label>
                                            <input type="text" class="form-control" name="whatsapp"
                                                placeholder="No Whatsapp" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Instagram</label>
                                            <input type="text" class="form-control" name="instagram"
                                                placeholder="Instagram" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Harga</label>
                                            <input type="text" class="form-control" name="harga" placeholder="Harga"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Benefit</label>
                                            <textarea class="form-control" name="benefit" id="summernote1"
                                                placeholder="Benefit" value="{{ old('benefit') }}" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Eligible</label>
                                            <textarea class="form-control" name="eligible" id="summernote2"
                                                placeholder="Eligible" value="{{ old('eligible') }}" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="">Pilih Status</option>
                                                <option value="verifikasi">Verifikasi</option>
                                                <option value="terverifikasi">Terverifikasi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Kategori Event</label>
                                            <select class="form-control" name="id_category" required>
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($category as $cate)
                                                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Jenis Event</label>
                                            <select class="form-control" name="id_jenis" required>
                                                <option value="">Pilih Jenis</option>
                                                @foreach ($jenis as $j)
                                                    <option value="{{ $j->id }}">{{ $j->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Gambar</label>
                                            <input type="file" class="form-control" name="gambar" id="customFile">
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
