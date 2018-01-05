<?php

use Illuminate\Database\Seeder;
use App\User;
use App\il;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        il::truncate();
        Eloquent::unguard();
        $this->call(UserTableSeeder::class);
        $this->call(ilsTableSeeder::class);
    }
}
