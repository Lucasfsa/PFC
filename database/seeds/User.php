<?php

use Illuminate\Database\Seeder;

class User extends Seeder
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
            'nivel_de_acesso'=> 1,
        ]
    );
    }
}
