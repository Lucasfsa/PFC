<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('software')->insert([
            'nome_software' => 'Ecletica',
        ]
    );

        DB::table('software')->insert([
            'nome_software' => 'SysPDV',
        ]
    );

     DB::table('software')->insert([
            'nome_software' => 'ACSN',
        ]
    );

    }
}

