<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhanAnhSeeder extends Seeder
{
    public function run()
    {
        DB::table('phan_anh')->insert([
            [
                'ma_cu_dan' => 1,
                'noi_dung' => 'Thang máy hoạt động chậm',
                'trang_thai' => 'moi',
                'ngay_gui' => '2024-05-01',
            ],
            [
                'ma_cu_dan' => 2,
                'noi_dung' => 'Nước sinh hoạt yếu',
                'trang_thai' => 'dang_xu_ly',
                'ngay_gui' => '2024-05-02',
            ],
            [
                'ma_cu_dan' => 4,
                'noi_dung' => 'Đèn hành lang bị hỏng',
                'trang_thai' => 'da_xu_ly',
                'ngay_gui' => '2024-05-03',
            ],
        ]);
    }
}
