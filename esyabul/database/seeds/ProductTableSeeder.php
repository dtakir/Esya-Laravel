<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,30) as $index)
        {
            Product::create([
                'id' => $faker->integer(5),
                'il' => $faker->varchar(4),

            ]);
        }
    }
}
