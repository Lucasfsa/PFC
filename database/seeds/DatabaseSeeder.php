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
        $this->call(ClientesTableSeeder::class);
        $this->call(SoftwaresTableSeeder::class);
        $this->call(ClienteSoftwareTableSeeder::class);
        $this->call(SyspdvTableSeeder::class);
        $this->call(AcsnTableSeeder::class);
        $this->call(EcleticaTableSeeder::class);
    }
}
