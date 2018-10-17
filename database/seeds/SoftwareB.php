<?php

use Illuminate\Database\Seeder;

class SoftwareB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('software_bs')->insert([
            'id_ClienteSoftware' => 49,
            'contrato'=> 20044,
     
            ]
        );
         DB::table('software_bs')->insert([
            'id_ClienteSoftware' => 50,
            'contrato'=> 9937,
     
            ]
        );
         DB::table('software_bs')->insert([
            'id_ClienteSoftware' => 51,
            'contrato'=> 20049,
     
            ]
        );
         DB::table('software_bs')->insert([
            'id_ClienteSoftware' => 52,
            'contrato'=> 20056,
     
            ]
        );
    }
}
