<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Companie;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Companie::factory()->count(15)->create();
    }
}
