<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\il;
class ilsTableSeeder extends Seeder
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
                 il::create([
                'id' => $faker->integer(5),
                'il' => $faker->varchar(4),

            ]);
        }
    }
}
