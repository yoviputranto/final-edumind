<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id';
    protected $table        = 'jawabans';
    protected $fillable     = [
        'jawaban', 'user_id', 'pertanyaan_id'
    ];

    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getPertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'pertanyaan_id', 'id');
    }

    public function getKomentar()
    {
        return $this->hasMany(Komentar::class, 'jawaban_id  ', 'id');
    }
    public function getCreatedAtAttribute()
    {
    return \Carbon\Carbon::parse($this->attributes['created_at'])
       ->diffForHumans();
    }

}
