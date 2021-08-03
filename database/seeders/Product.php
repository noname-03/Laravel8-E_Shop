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
            'price' => '100000',
            'photo' => 'hai.jpg',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'category_id' => 2,
            'name' => 'Edwil',
            'price' => '100000',
            'photo' => 'edwin.jpg',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'category_id' => 3,
            'name' => 'Erigo',
            'price' => '100000',
            'photo' => 'Erigo.jpg',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'category_id' => 4,
            'name' => '3 Seconds',
            'price' => '100000',
            'photo' => '3 Seconds.jpg',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
        ];
        \DB::table('products')->insert($product);
    }
}
