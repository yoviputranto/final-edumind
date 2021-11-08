<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Article extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id';
    protected $table        = 'articles';
    protected $fillable     = [
        'category_id', 'title', 'body', 'author', 'slug', 'status', 'image'
    ];

    public function getCategory()
    {
        return $this->belongsTo(ArticleCategory::class, 'category_id');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}
