<?php

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
        App\User::create([
            'name' => 'Thomas',
            'email' => 'thomas@gmail.com',
            'phone_number'=>'07568900',
            'password' => bcrypt('password'),
            'role'=>1
        ]);
    }
}
