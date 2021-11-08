<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventJenis extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id';
    protected $table        = 'jenis_events';
    protected $fillable     = [
        'name'
    ];
    public function getEvent(){
        return $this->hasMany(Event::class,'id_jenis','id');
    }
}
