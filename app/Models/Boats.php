<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boats extends Model
{
    use HasFactory;

    public $image = [
        "path" => "",
        "description" => ""
    ];
    public $attributes = [];
}
