<?php

namespace App\Models;

use App\Models\Admin\Pertanyaan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikePertanyaan extends Model
{
    use HasFactory;
    protected $table    = 'like_pertanyaan';
    public $timestamps   = false;
    protected $fillable = [
        'pertanyaan_id', 'user_id'
    ];

    public function getPertanyaan(){
        return $this->belongsTo(Pertanyaan::class,'pertanyaan_id','id');
    }
}
