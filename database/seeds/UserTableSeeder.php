<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            "name" => "Moderator",
            "email" => "moderator@gmail.com",
            "role_id" => 1,
            "password" => Hash::make("123456"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
