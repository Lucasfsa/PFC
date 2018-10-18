<?php

use Illuminate\Database\Seeder;

class SoftwareC extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 53,
            'codigo_rede'=> 977,
            'codigo_loja'=> 540,
            ]
        );
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 54,
            'codigo_rede'=> 977,
            'codigo_loja'=> 708,
            ]
        );
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 55,
            'codigo_rede'=> 977,
            'codigo_loja'=> 651,
            ]
        );
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 56,
            'codigo_rede'=> 977,
            'codigo_loja'=> 560,
            ]
        );
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 57,
            'codigo_rede'=> 977,
            'codigo_loja'=> 769,
            ]
        );
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 58,
            'codigo_rede'=> 977,
            'codigo_loja'=> 696,
            ]
        );
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 59,
            'codigo_rede'=> 977,
            'codigo_loja'=> 764,
            ]
        );
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 60,
            'codigo_rede'=> 977,
            'codigo_loja'=> 384,
            ]
        );
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 61,
            'codigo_rede'=> 977,
            'codigo_loja'=> 492,
            ]
        );
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 62,
            'codigo_rede'=> 977,
            'codigo_loja'=> 245,
            ]
        );
        DB::table('software_cs')->insert([
            'id_ClienteSoftware' => 63,
            'codigo_rede'=> 977,
            'codigo_loja'=> 636,
            ]
        );
    }
}
