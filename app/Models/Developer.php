<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Game;

class Developer extends Model
{
    public function games() {
        return $this->hasMany(Game::class);
    }
}


