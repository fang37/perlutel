<?php

namespace Modules\Sympoza\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nim', 'email', 'faculty'];
    protected $table = 'author';

    protected static function newFactory()
    {
        return \Modules\Sympoza\Database\factories\AuthorFactory::new();
    }
}
