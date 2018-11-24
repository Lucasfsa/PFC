<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClienteEcleticaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 53,
            'ecletica_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 54,
            'ecletica_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 55,
            'ecletica_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 56,
            'ecletica_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 57,
            'ecletica_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 58,
            'ecletica_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 59,
            'ecletica_id' => 7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 60,
            'ecletica_id' => 8,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 61,
            'ecletica_id' => 9,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 62,
            'ecletica_id' => 10,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('cliente_ecletica')->insert([
            'cliente_id' => 63,
            'ecletica_id' => 11,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
