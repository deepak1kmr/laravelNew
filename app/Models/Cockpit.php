<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cockpit extends Model
{
    protected $table = "cock_pit";
    protected $fillable = [
        'cock_name',
        'height',
        'weight',
        'endurance',
        'image'
    ];

}
