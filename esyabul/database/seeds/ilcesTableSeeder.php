<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\ilce;
class ilcesTableSeeder extends Seeder
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
            ilce::create([
                'id' => $faker->integer(5),
                'ilce' => $faker->varcahar(4),
                'ilID' =>$faker->integer()
            ]);
        }
    }
}
