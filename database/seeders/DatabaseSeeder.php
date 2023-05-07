<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //make seeder for roles
        $this->call(LaratrustSeeder::class);
        //make new user
        $this->call(UsersTableSeeder::class);
        \App\Models\User::factory(10)->create();

    }
}
