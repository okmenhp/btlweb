<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameGameType extends Model
{
    use HasFactory;

    protected $table = 'game_game_type';
    protected $fillable = ['game_id', 'game_type_id'];
}
