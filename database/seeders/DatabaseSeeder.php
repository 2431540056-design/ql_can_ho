<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            VaiTroSeeder::class,
            NguoiDungSeeder::class,
            LoaiCanHoSeeder::class,
            CanHoSeeder::class,
            CuDanSeeder::class,
            HopDongSeeder::class,
            HoaDonSeeder::class,
            ThanhToanSeeder::class,
            PhanAnhSeeder::class,
        ]);
    }
}
