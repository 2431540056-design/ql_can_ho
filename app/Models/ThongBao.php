<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThongBao extends Model
{
    protected $table = 'thong_bao';

    protected $primaryKey = 'ma_thong_bao';

    public $timestamps = false;

    protected $fillable = [
        'tieu_de',
        'noi_dung',
        'ma_cu_dan',
        'ngay_gui'
    ];

    public function cuDan()
    {
        return $this->belongsTo(CuDan::class,'ma_cu_dan');
    }
}