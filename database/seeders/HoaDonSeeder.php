<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoaDonSeeder extends Seeder
{
    public function run()
    {
        DB::table('hoa_don')->insert([
            [
                'ma_can_ho' => 1,
                'tong_tien' => 5200000,
                'han_thanh_toan' => '2024-05-10',
                'trang_thai' => 'chua_thanh_toan',
            ],
            [
                'ma_can_ho' => 2,
                'tong_tien' => 7200000,
                'han_thanh_toan' => '2024-05-10',
                'trang_thai' => 'da_thanh_toan',
            ],
            [
                'ma_can_ho' => 3,
                'tong_tien' => 9200000,
                'han_thanh_toan' => '2024-05-10',
                'trang_thai' => 'da_thanh_toan',
            ],
            [
                'ma_can_ho' => 6,
                'tong_tien' => 10200000,
                'han_thanh_toan' => '2024-05-10',
                'trang_thai' => 'chua_thanh_toan',
            ],
        ]);
    }
}
