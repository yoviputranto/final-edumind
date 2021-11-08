@extends('admin.layouts.master')
@section('content')
    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel mx-5">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-6 mb-1 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h2 class=" font-weight-medium text-black mb-2">Kategori Artikel</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <div class="pr-1 mb-3 mb-xl-0">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-striped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>
                                                        <a href="{{ route('category-articles.edit', $category->id) }}"
                                                            class="btn btn-success float-left mx-1">Edit</a>
                                                        <form
                                                            action="{{ route('category-articles.destroy', $category->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger mb-3">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h3 class=" font-weight-medium text-black mb-4">Tambah Kategori</h3>
                                    <form action="{{ route('category-articles.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Nama Kategori</label>
                                            <textarea class="form-control" name="name" placeholder="Nama Kategori"
                                                value="{{ old('name') }}" required></textarea>
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
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
