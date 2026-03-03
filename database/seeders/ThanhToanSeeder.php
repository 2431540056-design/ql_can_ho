<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThanhToanSeeder extends Seeder
{
    public function run()
    {
        DB::table('thanh_toan')->insert([
            [
                'ma_hoa_don' => 2,
                'so_tien' => 7200000,
                'phuong_thuc' => 'chuyen_khoan',
                'ngay_thanh_toan' => '2024-05-05',
            ],
            [
                'ma_hoa_don' => 3,
                'so_tien' => 9200000,
                'phuong_thuc' => 'tien_mat',
                'ngay_thanh_toan' => '2024-05-06',
            ],
        ]);
    }
}
