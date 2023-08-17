<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $table = "matches";

    protected $fillable = [
        "cock_one_id",
        "cock_two_id",
        "region"
    ]
}
