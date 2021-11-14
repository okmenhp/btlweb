<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameType extends Model
{
    use HasFactory;

    protected $table = 'game_type';
    protected $fillable = ['name'];

    public function game(){
        return $this->belongsToMany('\App\Models\Game', 'game_game_type', 'game_type_id', 'game_id');
    }
}
