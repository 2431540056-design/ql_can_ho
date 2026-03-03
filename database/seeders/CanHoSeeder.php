<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CanHoSeeder extends Seeder
{
    public function run()
    {
        DB::table('can_ho')->insert([
            [
                'so_can_ho' => 'A101',
                'tang' => 1,
                'dien_tich' => 30,
                'trang_thai' => 'dang_o',
                'ma_loai_can_ho' => 1,
            ],
            [
                'so_can_ho' => 'A102',
                'tang' => 1,
                'dien_tich' => 45,
                'trang_thai' => 'dang_o',
                'ma_loai_can_ho' => 2,
            ],
            [
                'so_can_ho' => 'A103',
                'tang' => 1,
                'dien_tich' => 45,
                'trang_thai' => 'dang_o',
                'ma_loai_can_ho' => 2,
            ],
            [
                'so_can_ho' => 'B201',
                'tang' => 2,
                'dien_tich' => 65,
                'trang_thai' => 'trong',
                'ma_loai_can_ho' => 3,
            ],
            [
                'so_can_ho' => 'B202',
                'tang' => 2,
                'dien_tich' => 30,
                'trang_thai' => 'trong',
                'ma_loai_can_ho' => 1,
            ],
            [
                'so_can_ho' => 'B203',
                'tang' => 2,
                'dien_tich' => 85,
                'trang_thai' => 'dang_o',
                'ma_loai_can_ho' => 4,
            ],
            
            [
                'so_can_ho' => 'C301',
                'tang' => 3,
                'dien_tich' => 85,
                'trang_thai' => 'dang_o',
                'ma_loai_can_ho' => 4,
            ],
            [
                'so_can_ho' => 'C302',
                'tang' => 3,
                'dien_tich' => 30,
                'trang_thai' => 'dang_o',
                'ma_loai_can_ho' => 1,
            ],
            [
                'so_can_ho' => 'C303',
                'tang' => 3,
                'dien_tich' => 30,
                'trang_thai' => 'trong',
                'ma_loai_can_ho' => 1,
            ],
            [
                'so_can_ho' => 'D401',
                'tang' => 4,
                'dien_tich' => 65,
                'trang_thai' => 'dang_o',
                'ma_loai_can_ho' => 3,
            ],
            [
                'so_can_ho' => 'D402',
                'tang' => 4,
                'dien_tich' => 65,
                'trang_thai' => 'dang_o',
                'ma_loai_can_ho' => 3,
            ],
            [
                'so_can_ho' => 'D403',
                'tang' => 4,
                'dien_tich' => 45,
                'trang_thai' => 'trong',
                'ma_loai_can_ho' => 2,
            ],
        ]);
    }
}
