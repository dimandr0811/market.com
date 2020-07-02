<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [   'name' => 'Администатор',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin'),
                'is_admin' => 1,],
            [   'name' => 'Пользователь',
                'email' => 'person@example.com',
                'password' => bcrypt('person'),
                'is_admin' => 0,],
        ]);
    }
}
