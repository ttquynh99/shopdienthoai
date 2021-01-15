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
        $this->call(NhasanxuatSeeder::class);
        $this->call(ThanhtoanSeeder::class);
        $this->call(KhachhangSeeder::class);
        $this->call(NhanvienSeeder::class);
    }
}
