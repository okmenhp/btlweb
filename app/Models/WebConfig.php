<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebConfig extends Model
{
    use HasFactory;

    protected $table = 'videos';
    protected $fillable = ['favicon', 'logo', 'phone', 'address'];
}
