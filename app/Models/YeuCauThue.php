<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YeuCauThue extends Model
{
    protected $primaryKey = 'ma_yeu_cau';

    protected $table = 'yeu_cau_thue';

    protected $fillable = [
    'ma_nguoi_dung',
    'ma_can_ho',
    'ngay_hen',
    'gio_hen',
    'ghi_chu',
    'trang_thai'
    ];

    public function canHo()
    {
        return $this->belongsTo(CanHo::class,'ma_can_ho');
    }

    public function nguoiDung()
    {
        return $this->belongsTo(User::class,'ma_nguoi_dung');
    }
}
