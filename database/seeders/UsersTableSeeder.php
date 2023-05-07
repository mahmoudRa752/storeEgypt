<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =\App\Models\User::create([
            'first_name'=>'super',
            'last_name'=>'admin',
            'email'=>'super_admin@app.com',
            'password'=>bcrypt('1234'),
        ]);
        //attach new user to super admin role
        $user->attachRole('super_admin');
    }
}
