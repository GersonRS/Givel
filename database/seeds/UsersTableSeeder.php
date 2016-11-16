<?php

use Illuminate\Database\Seeder;
use Givel\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
    			'name' => 'Admin',
    			'email' => 'admin@admin.com',
    			'password' => bcrypt(123456),
    			'remember_token' => str_random(10),
    	]);
    }
}
