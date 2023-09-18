<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\Hash;
use Illuminate\Database\Seeder;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Money Johri',
            "email"=>"money@gmail.com",
            "password"=>Hash::make('12345') 
        ]);
    }
}
