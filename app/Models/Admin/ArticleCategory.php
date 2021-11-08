<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;
    protected $table = 'article_categories';
    protected $fillable = [
        'name',
    ];

    public function getArticle(){
        return $this->hasMany(Article::class,'category_id','id');
    }
}
