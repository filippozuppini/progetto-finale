<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforms = [
            ['name' => 'Windows', 'icon' => 'bi-windows'],
            ['name' => 'macOS',   'icon' => 'bi-apple'],
            ['name' => 'Linux',   'icon' => 'bi-ubuntu'],
        ];

        foreach ($platforms as $platform) {
            
            $newPlatform = new Platform();

            $newPlatform->name = $platform['name'];
            $newPlatform->icon = $platform['icon'];

            $newPlatform->save();

        }
    }
}
