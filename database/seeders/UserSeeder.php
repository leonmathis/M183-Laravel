<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            [
                'firstname' => 'Leon', 
                'lastname' => 'Pulikkottil', 
                'username' => 'administrator',
                'is_admin' => '1',
                'password' => bcrypt('123') // hash
            ]
        ]);
    }
}
