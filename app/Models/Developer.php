<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    public function Game() {
        return $this->hasMany(Game::class);
    }
}


