@extends('layouts.backend')

@section('content')


    <main class="content dashboard-wrapper">
        <div class="container dashboard-card">
            <section class="rounded bg-white py-4 px-2">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-lg-12">
                        <div class="card1">
                            <div class="card-header">
                                <h4>Data Diri</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user.update', $profiles->id) }}" method="POST"
                                    class="form-horizontal form-material">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Lengkap</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" class="form-control form-control-line"
                                                value="{{ $profiles->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="text" name="email" class="form-control form-control-line"
                                                value="{{ $profiles->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label class="col-md-12">Nomor HP</label>
                                        <div class="col-md-12">
                                            <input type="text" name="telephone" class="form-control form-control-line"
                                                value="{{ $profiles->telephone }}">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn bg-purple" id="btn-data-diri">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
