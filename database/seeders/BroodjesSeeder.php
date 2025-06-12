<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BroodjesSeeder extends Seeder
{
    public function run()
    {
        DB::table('broodjes')->insert([
            ['naam' => 'Broodje', 'afbeelding' => 'broodje.jpg'],
            ['naam' => 'Croissant', 'afbeelding' => 'croissant.jpg'],
            ['naam' => 'chocoladebroodj', 'afbeelding' => 'pain.jpg'],
        ]);

        DB::table('broodjes')->insert([
            ['naam' => 'Slaaf', 'afbeelding' => 'Gio.jpg'],
            ['naam' => 'Kaasbroodje', 'afbeelding' => 'kaasbroodje.jpg'],
            ['naam' => 'Friekandellen broodje', 'afbeelding' => 'Frikandellen broodje.jpg'],
        ]);
    }
}
