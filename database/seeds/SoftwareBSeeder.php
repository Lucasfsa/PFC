<?php

use Illuminate\Database\Seeder;

class SoftwareBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('software_bs')->insert([
            'id_ClienteSoftware' => 3,
            'controle'=> 1234567,
        	'versao'=> 1234567,
        	'serie'=> 0000001,
        	]
    	);

    }
}
