<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $data = [
            'name' =>'Golu',
            'email' => 'golu1@g.c',
            'password' => Hash::make("123456"),
        ];
        User::create($data);
    }
}
