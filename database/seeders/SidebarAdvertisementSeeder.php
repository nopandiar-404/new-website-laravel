<?php

namespace Database\Seeders;

use App\Models\SidebarAdvertisement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SidebarAdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SidebarAdvertisement::factory()->create();
    }
}
