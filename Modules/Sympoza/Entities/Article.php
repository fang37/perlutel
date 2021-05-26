<?php

namespace Modules\Sympoza\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'title', 'abstract', 'keyword', 'author_desc', 'link'];
    protected $table = 'article';

    protected static function newFactory()
    {
        return \Modules\Sympoza\Database\factories\ArticleFactory::new();
    }
}
