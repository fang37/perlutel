<?php

namespace Modules\Sympoza\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'first_name', 'last_name', 'email', 'affiliation', 'status', 'address', 'phone_number'];
    protected $table = 'sympoza_profile';

    protected static function newFactory()
    {
        return \Modules\Sympoza\Database\factories\ProfileFactory::new();
    }
}
