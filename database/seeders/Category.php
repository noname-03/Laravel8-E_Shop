<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
            'name' => 'Trainers',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'name' => 'Jeans',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'name' => 'Chinos',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'name' => 'T-Shirts',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
        ];
        \DB::table('categories')->insert($categories);
        // $faker = Faker::create('id_ID');
        // for ($i=1; $i < 5; $i++) {
        //     \DB::table('categories')->insert([
        //         'name' => $faker->name,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }
    }
}
