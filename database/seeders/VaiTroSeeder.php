<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaiTroSeeder extends Seeder
{
    public function run()
    {
        DB::table('vai_tro')->insert([
            ['ten_vai_tro' => 'admin'],
            ['ten_vai_tro' => 'cu_dan'],
        ]);
    }
}
