<?php

use Illuminate\Database\Seeder;

class Software extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('software')->insert([
            'nome_software' => 'SYSPDV',
        ]
    );

        DB::table('software')->insert([
            'nome_software' => 'ACSN',
        ]
    );

     DB::table('software')->insert([
            'nome_software' => 'ECLÉTICA',
        ]
    );
    }
}