<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoa_don';

    protected $primaryKey = 'ma_hoa_don';

    public $timestamps = false;

    protected $fillable = [
        'ma_can_ho',
        'tong_tien',
        'han_thanh_toan',
        'trang_thai'
    ];

    public function canHo()
    {
        return $this->belongsTo(CanHo::class,'ma_can_ho');
    }
}
