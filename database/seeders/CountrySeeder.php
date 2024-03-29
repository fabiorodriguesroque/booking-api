<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'name' => 'United States',
            'lat' => 37.09024,
            'lng' => -95.712891
        ]);

        Country::create([
            'name' => 'United Kingdom',
            'lat' => 55.378051,
            'lng' => -3.435973
        ]);
    }
}
