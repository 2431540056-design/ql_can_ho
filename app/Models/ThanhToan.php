<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThanhToan extends Model
{
    protected $table = 'thanh_toan';

    protected $primaryKey = 'ma_thanh_toan';

    public $timestamps = false;

    protected $fillable = [
        'ma_hoa_don',
        'so_tien',
        'phuong_thuc',
        'ngay_thanh_toan'
    ];

    public function hoaDon()
    {
        return $this->belongsTo(HoaDon::class,'ma_hoa_don','ma_hoa_don');
    }
}