<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanAnh extends Model
{
    protected $table = 'phan_anh';

    protected $primaryKey = 'ma_phan_anh';

    public $timestamps = false;

    protected $fillable = [
        'ma_cu_dan',
        'noi_dung',
        'trang_thai',
        'ngay_gui'
    ];

    public function cuDan()
    {
        return $this->belongsTo(CuDan::class,'ma_cu_dan','ma_cu_dan');
    }
}