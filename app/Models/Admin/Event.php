<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Event extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id';
    protected $table        = 'events';
    protected $fillable     = [
        'judul', 'gambar', 'deskripsi', 'waktu', 'tanggal', 'registrasi', 'deadline', 'link_zoom', 'link_event', 'event_organizer', 'email', 'instagram', 'whatsapp', 'benefit', 'eligible', 'status', 'id_jenis', 'id_category','harga','slug', 'user_id'
    ];

    public function getJenis()
    {
        return $this->belongsTo(EventJenis::class, 'id_jenis', 'id');
    }

    public function getCategory()
    {
        return $this->belongsTo(EventCategory::class, 'id_category', 'id');
    }

    public function getTanggalAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])
            ->translatedFormat('l, d M Y');
    }

    public function getRegistrasiAttribute()
    {
        return Carbon::parse($this->attributes['registrasi'])
            ->translatedFormat('d F Y');
    }

    public function getDeadlineAttribute()
    {
        return Carbon::parse($this->attributes['deadline'])
            ->translatedFormat('d F Y');
    }

    public function getWaktuAttribute()
    {
        return Carbon::parse($this->attributes['waktu'])
            ->translatedFormat('H:i');
    }
}
