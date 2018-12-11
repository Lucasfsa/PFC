<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ChavesTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(PessoaFTableSeeder::class);
        $this->call(PessoaJTableSeeder::class);
        $this->call(SyspdvTableSeeder::class);
        $this->call(ClienteSyspdvTableSeeder::class);
        $this->call(AcsnTableSeeder::class);
        $this->call(ClienteAcsnTableSeeder::class);
        $this->call(EcleticaTableSeeder::class);
        $this->call(ClienteEcleticaTableSeeder::class);
    }
}
