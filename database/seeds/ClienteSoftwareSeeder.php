<?php

use Illuminate\Database\Seeder;

class ClienteSoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cliente_softwares')->insert([
        	'id_Cliente'=> 1,
            'id_Software' => 1,
        ]
    );

         DB::table('cliente_softwares')->insert([
        	'id_Cliente'=> 2,
            'id_Software' => 1,
        ]
    );
         DB::table('cliente_softwares')->insert([
        	'id_Cliente'=> 3,
            'id_Software' => 2,
        ]
    );
         DB::table('cliente_softwares')->insert([
        	'id_Cliente'=> 4,
            'id_Software' => 3,
        ]
    );
    }
}
 