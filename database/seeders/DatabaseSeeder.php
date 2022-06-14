<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        DB::table('users')->insert([
            'user_id' => 'KBC123',
            'name' => 'shyam',
            'email' => 'std@kbc.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
           'user_id' => 'KBC000',
            'name' => 'firstadmin',
            'email' => 'admin@kbc.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
