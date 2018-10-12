<?php

use Illuminate\Database\Seeder;

class SoftwareCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 4,
            'contrato'=> 91993,
            ]
         );
    }
}