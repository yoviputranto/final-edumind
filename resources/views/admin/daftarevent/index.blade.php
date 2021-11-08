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
                                    <h2 class=" font-weight-medium text-black mb-2">Daftar Event</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <a href="{{ route('daftar-events.create') }}" class="btn btn-primary mb-4">Tambah</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-striped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">No. HP</th>
                                                <th scope="col">Event</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($devents as $devent)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $devent->nama }}</td>
                                                    <td>{{ $devent->getUser->email }}</td>
                                                    <td>{{ $devent->getUser->telephone }}</td>
                                                    <td>{{ $devent->getEvent->judul }}</td>
                                                    <td>{{ $devent->status }}</td>
                                                    <td>{{ $devent->created_at }}</td>
                                                    <td>
                                                        <a href="{{ route('daftar-events.edit', $devent->id) }}"
                                                            class="btn btn-success float-left mx-1">Edit</a>
                                                        <form action="{{ route('daftar-events.destroy', $devent->id) }}"
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
