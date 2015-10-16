<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Администратор',
                'surname' => 'Сайта',
                'email' => 'admin@mail.ru',
                'password' => bcrypt('admin'),
                'phone' => '8 (900) 777-77-77',
                'organization' => '',
                'role' => 'admin',
                'remember_token' => ''
            ]
        ]);
    }
}
