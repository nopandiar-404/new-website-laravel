<?php

namespace Database\Seeders;

use App\Models\HomeAdvertisement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeAdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeAdvertisement::factory()->create();
    }
}
