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
                                    <h2 class=" font-weight-medium text-black mb-2">Events</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <a href="{{ route('events.create') }}" class="btn btn-primary mb-4">Tambah</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="card mt-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1633983482450-bfb7b566fe6a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80"
                                    class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Judul Event</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Voluptate libero reprehenderit eos harum, eveniet rerum saepe aperiam qui ipsum fuga
                                        dolores exercitationem unde itaque animi. Debitis aliquid quasi architecto. Tenetur?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo distinctio minima eos
                                        nihil molestias dolor nostrum soluta illum vitae non inventore, dignissimos
                                        obcaecati id corporis culpa ullam dolore sit optio?
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="card-title mt-4">Date and Time</h5>
                                            <p>Tanggal event : -</p>
                                            <p>Waktu event : -</p>
                                            <p>Registrasi : -</p>
                                            <p>Deadline : -</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="card-title mt-4">Kontak</h5>
                                            <p>Event Oragnizer : -</p>
                                            <p>Email : -</p>
                                            <p>Instagram : -</p>
                                            <p>Whatsapp : -</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="card-title mt-4">Tempat</h5>
                                            <p>Link Zoom : -</p>
                                            <p>Link Event : -</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="card-title mt-4">Eligible</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quibusdam.
                                                Corrupti in pariatur ducimus eaque alias illum, aspernatur veniam cum
                                                soluta. Accusamus, odio animi adipisci consequatur tempora reiciendis ipsam
                                                eligendi.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="card-title mt-4">Benefit</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor obcaecati,
                                                distinctio dolorem recusandae cum labore magni nobis, assumenda error
                                                delectus laborum consequatur quasi aliquid mollitia amet tempora ullam
                                                similique magnam!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @foreach ($events as $event)
                        <div class="card mt-4">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ Storage::url($event->gambar) }}" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $event->judul }}</h5>
                                        <p class="card-text">{!! old('isi', $event->deskripsi ?? '') !!}
                                        </p>
                                        <p class="card-text">Rp.{{ $event->harga }}
                                        </p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="card-title mt-4">Date and Time</h5>
                                                <p>Tanggal event : {{ $event->tanggal }}</p>
                                                <p>Waktu event : {{ $event->waktu }}</p>
                                                <p>Registrasi : {{ $event->registrasi }}</p>
                                                <p>Deadline : {{ $event->deadline }}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="card-title mt-4">Kontak</h5>
                                                <p>Event Oragnizer : {{ $event->event_organizer }}</p>
                                                <p>Email : {{ $event->email }}</p>
                                                <p>Instagram : {{ $event->instagram }}</p>
                                                <p>Whatsapp : {{ $event->whatsapp }}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h5 class="card-title mt-4">Tempat</h5>
                                                <p>Link Zoom : {{ $event->link_zoom }}</p>
                                                <p>Link Event : {{ $event->link_event }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="card-title mt-4">Eligible</h5>
                                                <p>{!! old('isi', $event->eligible ?? '') !!}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="card-title mt-4">Benefit</h5>
                                                <p>{!! old('isi', $event->benefit ?? '') !!}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <a href="{{ route('events.edit', $event->id) }}"
                                                class="btn btn-success float-left mx-1 mb-3">Edit</a>
                                            <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger mb-3">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
