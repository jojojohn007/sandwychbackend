<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
            'role_type'=>'hospital_admin',
            'name'=>'John Doe',
            'email'=>'john@gmail.com',
            'password'=>Hash::make('johndoe@123'),
            'confirm_password'=>Hash::make('johndoe@123'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'role_type'=>'system_admin',
            'name'=>'John Smith',
            'email'=>'johnsmith@gmail.com',
            'password'=>Hash::make('johnsmith@123'),
            'confirm_password'=>Hash::make('johnsmith@123'),
            'created_at'=>now(),
            'updated_at'=>now(), 
        ],
        [
            'role_type'=>'system_admin',
            'name'=>'james',
            'email'=>'james@gmail.com',
            'password'=>Hash::make('james@123'),
            'confirm_password'=>Hash::make('james@123'),
            'created_at'=>now(),
            'updated_at'=>now(), 
        ],
        [
            'role_type'=>'hospital_admin',
            'name'=>'George',
            'email'=>'george@gmail.com',
            'password'=>Hash::make('george@123'),
            'confirm_password'=>Hash::make('george@123'),
            'created_at'=>now(),
            'updated_at'=>now(), 
        ],
    ]);
    }
}
