<?php

namespace App\Models;

use App\Models\Admin\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarEvent extends Model
{
    use HasFactory;
    protected $table = "daftar_events";
    protected $fillable = [
        'user_id','event_id','status','bukti','nama'
    ];

    public function getUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function getEvent(){
        return $this->belongsTo(Event::class,'event_id','id');
    }
}
