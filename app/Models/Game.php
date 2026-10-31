<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Developer;
use App\Models\Genre;
use App\Models\Platform;

class Game extends Model
{
    protected function casts(): array
    {
        return [ 'release_date' => 'date' ];
    }

    public function developer() {
        return $this->belongsTo(Developer::class);
    }

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }

    public function platforms() {
        return $this->belongsToMany(Platform::class);
    }
}
