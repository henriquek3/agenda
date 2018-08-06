<?php

use Illuminate\Database\Seeder;
use Modules\Contatos\Database\Seeders\ContatosDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             ContatosDatabaseSeeder::class
         ]);
    }
}
