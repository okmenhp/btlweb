<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameConfig extends Model
{
    use HasFactory;

    protected $table = 'game_config';
    protected $fillable = ['cpu', 'ram', 'rate', 'vga', 'hard_drive', 'os'];

    
}
