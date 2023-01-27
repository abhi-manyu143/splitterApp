<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class friends extends Model
{
    use HasFactory;

    public function groups():HasOne
    {
        return $this->belongsTo(Group::class);
    }
}
