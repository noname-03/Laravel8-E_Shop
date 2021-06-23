<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
            'category_id' => 1,
            'name' => 'Puma',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'category_id' => 2,
            'name' => 'Edwil',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'category_id' => 3,
            'name' => 'Erigo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'category_id' => 4,
            'name' => '3 Seconds',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
        ];
        \DB::table('products')->insert($product);
    }
}
