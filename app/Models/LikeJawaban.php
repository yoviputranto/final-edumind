<?php

namespace App\Models;

use App\Models\Admin\Jawaban;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeJawaban extends Model
{
    use HasFactory;

    protected $table    = 'like_jawaban';
    protected $fillable = ['jawaban_id', 'user_id'];
    public $timestamps  = false;

    public function getJawaban()
    {
        return $this->belongsTo(Jawaban::class, 'jawaban_id', 'id');
    }

    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
