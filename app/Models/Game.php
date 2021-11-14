<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'game';
    protected $fillable = ['game_config_id','name', 'studio', 'public_date', 'rate', 'review', 'photo_url'];

    public function gameType(){
        return $this->belongsToMany('\App\Models\GameType', 'game_game_type', 'game_id', 'game_type_id');
    }
}
