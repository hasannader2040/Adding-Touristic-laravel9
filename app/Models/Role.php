<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

// I have to make sure about this
    public function users()
    {
        return $this->belongsToMany(\http\Client\Curl\User::class, 'role_user');
    }

}
