<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuDanSeeder extends Seeder
{
    public function run()
    {
        DB::table('cu_dan')->insert([
            [
                'ma_nguoi_dung' => 3,
                'ma_can_ho' => 1,
                'so_dien_thoai' => '0909123456',
                'cccd' => '012345678901',
            ],
            [
                'ma_nguoi_dung' => 4,
                'ma_can_ho' => 2,
                'so_dien_thoai' => '0909988776',
                'cccd' => '012345678902',
            ],
            [
                'ma_nguoi_dung' => 5,
                'ma_can_ho' => 3,
                'so_dien_thoai' => '0909123444',
                'cccd' => '012345678903',
            ],
            [
                'ma_nguoi_dung' => 6,
                'ma_can_ho' => 6,
                'so_dien_thoai' => '0909123888',
                'cccd' => '012345678904',
            ],
            [
                'ma_nguoi_dung' => 7,
                'ma_can_ho' => 8,
                'so_dien_thoai' => '0909123765',
                'cccd' => '012345678905',
            ],
            [
                'ma_nguoi_dung' => 8,
                'ma_can_ho' => 10,
                'so_dien_thoai' => '0909123489',
                'cccd' => '012345678906',
            ],
            [
                'ma_nguoi_dung' => 9,
                'ma_can_ho' => 11,
                'so_dien_thoai' => '0909654321',
                'cccd' => '012345678907',
            ],
            [
                'ma_nguoi_dung' => 10,
                'ma_can_ho' => 7,
                'so_dien_thoai' => '0909808080',
                'cccd' => '012345678908',
            ],
        ]);
    }
}
