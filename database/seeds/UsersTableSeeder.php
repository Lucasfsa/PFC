<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'name' => 'Wan',
            'email' => 'wan@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
