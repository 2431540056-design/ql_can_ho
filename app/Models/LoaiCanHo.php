<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiCanHo extends Model
{
    protected $table = 'loai_can_ho';

    protected $primaryKey = 'ma_loai_can_ho';

    protected $fillable = [
        'ten_loai',
        'dien_tich_tb',
        'gia_co_ban',
        'mo_ta'
    ];
}