<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Rair Angelos',
            'email'     => 'rairangelos@gmail.com',
            'password'  => bcrypt('rf@310890')
        ]);
    }
}
