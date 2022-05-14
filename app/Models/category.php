<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    #one to many
    /**
     * @var false|mixed|string
     */
    public mixed $image;

    public function place()
    {
        return $this->hasMany(place::class);
    }

}
