<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use  App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory()->count(15)->create();
        // DB::table('products')->insert([
        //     ['company_id' => '1'],
        //     ['company_id' => '2'],
        //     ['company_id' => '3']
        // ]);
    
    }
}
