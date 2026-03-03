<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiCanHoSeeder extends Seeder
{
    public function run()
    {
        DB::table('loai_can_ho')->insert([
            [
                'ten_loai' => 'Studio',
                'dien_tich_tb' => 30,
                'gia_co_ban' => 5000000,
                'mo_ta' => 'Căn hộ studio cho 1 người',
            ],
            [
                'ten_loai' => '1 Phòng ngủ',
                'dien_tich_tb' => 45,
                'gia_co_ban' => 7000000,
                'mo_ta' => 'Căn hộ 1 phòng ngủ',
            ],
            [
                'ten_loai' => '2 Phòng ngủ',
                'dien_tich_tb' => 65,
                'gia_co_ban' => 10000000,
                'mo_ta' => 'Căn hộ 2 phòng ngủ',
            ],
            [
                'ten_loai' => '3 Phòng ngủ',
                'dien_tich_tb' => 85,
                'gia_co_ban' => 13000000,
                'mo_ta' => 'Căn hộ 3 phòng ngủ',
            ],
        ]);
    }
}
