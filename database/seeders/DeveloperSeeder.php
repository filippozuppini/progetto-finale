<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run( Faker $faker): void
    {
        $developers = [
            ['name' => 'Valve',                 'country' => 'Stati Uniti'],
            ['name' => 'FromSoftware',          'country' => 'Giappone'],
            ['name' => 'CD Projekt Red',        'country' => 'Polonia'],
            ['name' => 'Rockstar North',        'country' => 'Regno Unito'],
            ['name' => 'Rockstar Games',        'country' => 'Stati Uniti'],
            ['name' => 'Bethesda Game Studios', 'country' => 'Stati Uniti'],
            ['name' => 'id Software',           'country' => 'Stati Uniti'],
            ['name' => 'Larian Studios',        'country' => 'Belgio'],
            ['name' => 'Supergiant Games',      'country' => 'Stati Uniti'],
            ['name' => 'Capcom',                'country' => 'Giappone'],
            ['name' => 'ConcernedApe',          'country' => 'Stati Uniti'],
            ['name' => 'Re-Logic',              'country' => 'Stati Uniti'],
            ['name' => 'Team Cherry',           'country' => 'Australia'],
            ['name' => 'Maddy Makes Games',     'country' => 'Canada'],
            ['name' => 'Firaxis Games',         'country' => 'Stati Uniti'],
            ['name' => 'Colossal Order',        'country' => 'Finlandia'],
            ['name' => 'Wube Software',         'country' => 'Repubblica Ceca'],
            ['name' => 'Ludeon Studios',        'country' => 'Canada'],
            ['name' => 'Innersloth',            'country' => 'Stati Uniti'],
            ['name' => 'Psyonix',               'country' => 'Stati Uniti'],
            ['name' => 'Unknown Worlds',        'country' => 'Stati Uniti'],
            ['name' => 'Iron Gate',             'country' => 'Svezia'],
            ['name' => 'ZA/UM',                 'country' => 'Regno Unito'],
            ['name' => 'Toby Fox',              'country' => 'Stati Uniti'],
            ['name' => 'Studio MDHR',           'country' => 'Canada'],
            ['name' => 'Hazelight Studios',     'country' => 'Svezia'],
            ['name' => 'Playdead',              'country' => 'Danimarca'],
            ['name' => 'Mobius Digital',        'country' => 'Stati Uniti'],
            ['name' => 'Mega Crit',             'country' => 'Stati Uniti'],
            ['name' => 'Motion Twin',           'country' => 'Francia'],
            ['name' => 'Coffee Stain Studios',  'country' => 'Svezia'],
            ['name' => 'Ghost Ship Games',      'country' => 'Danimarca'],
            ['name' => 'Santa Monica Studio',   'country' => 'Stati Uniti'],
            ['name' => 'SCS Software',          'country' => 'Repubblica Ceca'],
        ];


        foreach ($developers as $developer) {
            
            $newDeveloper = new Developer();

            $newDeveloper->name = $developer['name'];
            $newDeveloper->email = $faker->safeEmail();
            $newDeveloper->country = $developer['country'];

            $newDeveloper->save();
        }



    }
}
