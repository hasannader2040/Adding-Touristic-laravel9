<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    use HasFactory;

    #many to one
    public function place()
    {
        return $this->belongsTo(category::class);
    }
}
