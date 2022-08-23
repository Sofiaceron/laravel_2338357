<?php

namespace Database\Seeders;

use App\Models\huespedes;
use Illuminate\Database\Seeder;

class huespedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        huespedes::factory(20)->create();
    }
}
