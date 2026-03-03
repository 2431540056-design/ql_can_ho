<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NguoiDungSeeder extends Seeder
{
    public function run()
    {
        DB::table('nguoi_dung')->insert([
            [
                'ho_ten' => 'Quản trị viên',
                'email' => 'admin@gmail.com',
                'mat_khau' => Hash::make('123456'),
                'ma_vai_tro' => 1,
            ],
            [
                'ho_ten' => 'Ban quản lý',
                'email' => 'bql@gmail.com',
                'mat_khau' => Hash::make('123456'),
                'ma_vai_tro' => 2, 
            ],
            [
                'ho_ten' => 'Ngô Quang Huy',
                'email' => 'quhuy@gmail.com',
                'mat_khau' => Hash::make('huy'),
                'ma_vai_tro' => 3, 
            ],
            [
                'ho_ten' => 'Nguyễn Lê Thiên Ân',
                'email' => 'thienan@gmail.com',
                'mat_khau' => Hash::make('an'),
                'ma_vai_tro' => 3,
            ],
            [
                'ho_ten' => 'Nguyễn Đăng Khôi',
                'email' => 'dangkhoi@gmail.com',
                'mat_khau' => Hash::make('khoi'),
                'ma_vai_tro' => 3,
            ],
            [
                'ho_ten' => 'Lê Anh Kiệt',
                'email' => 'anhkiet@gmail.com',
                'mat_khau' => Hash::make('kiet'),
                'ma_vai_tro' => 3,
            ],
            [
                'ho_ten' => 'Nguyễn Đăng Khoa',
                'email' => 'dangkhoa@gmail.com',
                'mat_khau' => Hash::make('khoa'),
                'ma_vai_tro' => 3,
            ],
            [
                'ho_ten' => 'Nguyễn Anh Đức',
                'email' => 'anhduc@gmail.com',
                'mat_khau' => Hash::make('duc'),
                'ma_vai_tro' => 3,
            ],
            [
                'ho_ten' => 'Võ Văn Thông',
                'email' => 'vanthong@gmail.com',
                'mat_khau' => Hash::make('thong'),
                'ma_vai_tro' => 3,
            ],
            [
                'ho_ten' => 'Nguyễn Ngọc Đương',
                'email' => 'ngocduong@gmail.com',
                'mat_khau' => Hash::make('duong'),
                'ma_vai_tro' => 3,
            ],
        ]);
    }
}
