<center>
    <h2><?php echo e($event->judul); ?></h2>
    <img src="<?php echo e(storage_path('app/public/' . $event->gambar)); ?>" width="350px" alt="">

</center>
<p style="text-align: justify"><?php echo $event->deskripsi; ?></p>
<h5>Harga</h5>
<?php if($event->harga == 0): ?>
    <p>Gratis</p>
<?php else: ?>
    <p><?php echo e($event->harga); ?></p>
<?php endif; ?>

<h5>
    Waktu Pendaftaran
</h5>
<p><?php echo e($event->registrasi); ?> - <?php echo e($event->deadline); ?></p>
<h5>Waktu Kegiatan</h5>
<p><?php echo e($event->tanggal); ?> <?php echo e($event->waktu); ?> WIB</p>
<h5>Pemilik Acara</h5>
<p><?php echo e($event->event_organizer); ?></p>
<h5>Kontak</h5>
<p>Email : <?php echo e($event->email); ?></p>
<p>Whatsapp : <?php echo e($event->whatsapp); ?></p>
<p>Instagram : <?php echo e($event->instagram); ?></p>
<h5>Cocok Untuk</h5>
<p><?php echo $event->eligible; ?></p>
<h5>Keuntungan</h5>
<p><?php echo $event->benefit; ?></p>
<?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/frontend/event/print.blade.php ENDPATH**/ ?>