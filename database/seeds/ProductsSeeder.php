<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<10; $i++){
            DB::table('products')->insert([
                'name' => Str::random(10),
                'sku' => Str::random(12),
                'description' => Str::random(12),
            ]);
        }
    }
}
