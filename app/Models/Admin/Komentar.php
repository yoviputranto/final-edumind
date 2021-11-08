<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id';
    protected $table        = 'komentars';
    protected $fillable     = [
        'komentar', 'jawaban_id', 'user_id'
    ];

    public function getJawaban()
    {
        return $this->belongsTo(Jawaban::class, 'jawaban_id', 'id');
    }

    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getJawabKomentar()
    {
        return $this->hasMany(JawabKomentar::class, 'komentar_id', 'id');
    }
}
