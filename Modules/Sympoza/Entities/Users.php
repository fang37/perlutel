<?php

namespace Modules\Sympoza\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected static function newFactory()
    {
        return \Modules\Sympoza\Database\factories\UsersFactory::new();
    }
}
