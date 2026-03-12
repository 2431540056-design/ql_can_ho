<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HopDong extends Model
{
    protected $table = 'hop_dong';

    protected $primaryKey = 'ma_hop_dong';

    protected $fillable = [
        'ma_cu_dan',
        'ma_can_ho',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'gia_thue',
        'loai_hop_dong',
        'trang_thai'
    ];

    public function cuDan()
    {
        return $this->belongsTo(CuDan::class,'ma_cu_dan','ma_cu_dan');
    }

    public function canHo()
    {
        return $this->belongsTo(CanHo::class,'ma_can_ho','ma_can_ho');
    }
}