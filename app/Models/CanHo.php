<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CanHo extends Model
{
    protected $table = 'can_ho';

    protected $primaryKey = 'ma_can_ho';

    protected $fillable = [
        'so_can_ho',
        'tang',
        'dien_tich',
        'trang_thai',
        'ma_loai_can_ho'
    ];

public function loaiCanHo()
    {
        return $this->belongsTo(LoaiCanHo::class, 'ma_loai_can_ho', 'ma_loai_can_ho');
    }
}