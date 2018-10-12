<?php

use Illuminate\Database\Seeder;

class SoftwareASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('software_as')->insert([
            'id_ClienteSoftware' => 1,
            'rede'=> 12345,
        	'senha'=> '12345',
        	'codigo'=> '0000A1',
        ]
    );

          DB::table('software_as')->insert([
            'id_ClienteSoftware' => 2,
            'rede'=> 54321,
        	'senha'=> '54321',
        	'codigo'=> '0000A2',
        ]
    );
    }
}
