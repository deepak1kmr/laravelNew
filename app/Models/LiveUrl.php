<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveUrl extends Model
{
    protected $table = "live_url";

    protected $fillable = [
        "live_url"
    ];
}
