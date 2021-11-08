<center>
    <h2>{{ $event->judul }}</h2>
    <img src="{{ storage_path('app/public/' . $event->gambar) }}" width="350px" alt="">

</center>
<p style="text-align: justify">{!! $event->deskripsi !!}</p>
<h5>Harga</h5>
@if ($event->harga == 0)
    <p>Gratis</p>
@else
    <p>@currency($event->harga)</p>
@endif

<h5>
    Waktu Pendaftaran
</h5>
<p>{{ $event->registrasi }} - {{ $event->deadline }}</p>
<h5>Waktu Kegiatan</h5>
<p>{{ $event->tanggal }} {{ $event->waktu }} WIB</p>
<h5>Pemilik Acara</h5>
<p>{{ $event->event_organizer }}</p>
<h5>Kontak</h5>
<p>Email : {{ $event->email }}</p>
<p>Whatsapp : {{ $event->whatsapp }}</p>
<p>Instagram : {{ $event->instagram }}</p>
<h5>Cocok Untuk</h5>
<p>{!! $event->eligible !!}</p>
<h5>Keuntungan</h5>
<p>{!! $event->benefit !!}</p>
