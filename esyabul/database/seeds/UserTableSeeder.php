<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder
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
            User::create([
                'name' => $faker->firstName(5),
                'email' => $faker->email(4),
                'password' =>$faker->password()
            ]);
        }
    }
}
