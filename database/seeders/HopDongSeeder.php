<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HopDongSeeder extends Seeder
{
    public function run()
    {
        DB::table('hop_dong')->insert([
            [
                'ma_cu_dan' => 1,
                'ma_can_ho' => 1,
                'ngay_bat_dau' => '2024-01-01',
                'ngay_ket_thuc' => '2025-01-01',
                'gia_thue' => 5000000,
                'loai_hop_dong' => 'thue',
                'trang_thai' => 'con_hieu_luc',
            ],
            [
                'ma_cu_dan' => 2,
                'ma_can_ho' => 2,
                'ngay_bat_dau' => '2024-02-01',
                'ngay_ket_thuc' => '2025-02-01',
                'gia_thue' => 7000000,
                'loai_hop_dong' => 'thue',
                'trang_thai' => 'con_hieu_luc',
            ],
            [
                'ma_cu_dan' => 3,
                'ma_can_ho' => 3,
                'ngay_bat_dau' => '2024-03-01',
                'ngay_ket_thuc' => '2025-03-01',
                'gia_thue' => 9000000,
                'loai_hop_dong' => 'thue',
                'trang_thai' => 'con_hieu_luc',
            ],
            [
                'ma_cu_dan' => 4,
                'ma_can_ho' => 6,
                'ngay_bat_dau' => '2024-04-01',
                'ngay_ket_thuc' => '2025-04-01',
                'gia_thue' => 10000000,
                'loai_hop_dong' => 'thue',
                'trang_thai' => 'con_hieu_luc',
            ],
        ]);
    }
}
