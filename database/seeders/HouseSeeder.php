<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('houses')->truncate();
        DB::table('houses')->insert([
            'id' => 1,
            'name' => 'The Victoria',
            'price' => 374662,
            'bedrooms' => 4,
            'bathrooms' => 2,
            'storeys' => 2,
            'garages' => 2,
        ]);

        DB::table('houses')->insert([
            'id' => 2,
            'name' => 'The Xavier',
            'price' => 513268,
            'bedrooms' => 4,
            'bathrooms' => 2,
            'storeys' => 1,
            'garages' => 2,
        ]);

        DB::table('houses')->insert([
            'id' => 3,
            'name' => 'The Como',
            'price' => 454990,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'storeys' => 2,
            'garages' => 3,
        ]);

        DB::table('houses')->insert([
            'id' => 4,
            'name' => 'The Aspen',
            'price' => 384356,
            'bedrooms' => 4,
            'bathrooms' => 2,
            'storeys' => 2,
            'garages' => 2,
        ]);

        DB::table('houses')->insert([
            'id' => 5,
            'name' => 'The Lucretia',
            'price' => 572002,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'storeys' => 2,
            'garages' => 2,
        ]);

        DB::table('houses')->insert([
            'id' => 6,
            'name' => 'The Toorak',
            'price' => 521951,
            'bedrooms' => 5,
            'bathrooms' => 2,
            'storeys' => 1,
            'garages' => 2,
        ]);

        DB::table('houses')->insert([
            'id' => 7,
            'name' => 'The Skyscape',
            'price' => 263604,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'storeys' => 2,
            'garages' => 2,
        ]);

        DB::table('houses')->insert([
            'id' => 8,
            'name' => 'The Clifton',
            'price' => 386103,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'storeys' => 1,
            'garages' => 1,
        ]);

        DB::table('houses')->insert([
            'id' => 9,
            'name' => 'The Geneva',
            'price' => 390600,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'storeys' => 2,
            'garages' => 2,
        ]);
    }
}
