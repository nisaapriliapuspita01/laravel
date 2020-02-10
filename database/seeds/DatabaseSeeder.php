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
         $this->call(PenulisSeeder::class);
         $this->call(KelasSeeder::class);
         $this->call(SiswaSeeder::class);
         $this->call(GajiSeeder::class);
         $this->call(RelasiSeeder::class);
         $this->command->info('RelasiSeeder berhasil');
    }
}
