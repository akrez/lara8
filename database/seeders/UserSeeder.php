<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'AliAkbar Rezaei',
            'email' => 'akrez.like@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('12345678'),
            'remember_token' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'blog_name' => null,
        ]);
    }
}
