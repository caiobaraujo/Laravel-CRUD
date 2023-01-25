<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CreateProjectAndUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            "title"=> "Projeto 01",
	        "code"=> "123",
	        "start_date"=> Carbon::parse('2023-02-01')->format('Y-m-d'),
	        "end_date"=> Carbon::parse('2000-02-02')->format('Y-m-d'),

        ]);

        DB::table('users')->insert([
            "name"=> "Caio araujo",
	        "email"=> "caio@gmail.com",
	        "password"=> Hash::make("123456") ,
        ]);
    }
}
