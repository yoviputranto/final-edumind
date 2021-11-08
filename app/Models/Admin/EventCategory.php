<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    use HasFactory;
    protected $table = 'category_events';
    protected $fillable = [
        'name',
    ];

    public function getEvent(){
        return $this->hasMany(Event::class,'id_category','id');
    }
}
