<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['name' => 'Azione',         'color' => '#E74C3C'],
            ['name' => 'Avventura',      'color' => '#27AE60'],
            ['name' => 'GDR',            'color' => '#8E44AD'],
            ['name' => 'Sparatutto',     'color' => '#C0392B'],
            ['name' => 'Strategia',      'color' => '#2980B9'],
            ['name' => 'Simulazione',    'color' => '#16A085'],
            ['name' => 'Platform',       'color' => '#F39C12'],
            ['name' => 'Horror',         'color' => '#5D6D7E'],
            ['name' => 'Puzzle',         'color' => '#9B59B6'],
            ['name' => 'Sopravvivenza',  'color' => '#D35400'],
            ['name' => 'Roguelike',      'color' => '#E67E22'],
            ['name' => 'Indie',          'color' => '#1ABC9C'],
            ['name' => 'Open World',     'color' => '#2ECC71'],
            ['name' => 'Multigiocatore', 'color' => '#3498DB'],
            ['name' => 'Sport',          'color' => '#F1C40F'],
        ];

        foreach ($genres as $genre) {

            $newGenre = new Genre();

            $newGenre->name = $genre['name'];
            $newGenre->color = $genre['color'];

            $newGenre ->save();
        }

    }
}
