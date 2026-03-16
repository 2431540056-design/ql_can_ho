<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class CuDan extends Model
{
    protected $table = 'cu_dan';

    protected $primaryKey = 'ma_cu_dan';

    public $timestamps = false;

    protected $fillable = [
        
        'ma_nguoi_dung',
        'so_dien_thoai',
        'cccd',
        'ma_can_ho'
    ];

    public function canHo()
    {
        return $this->belongsTo(CanHo::class,'ma_can_ho','ma_can_ho');
    }

    public function nguoiDung()
    {
        return $this->belongsTo(User::class,'ma_nguoi_dung','ma_nguoi_dung');
    }

    public function hoaDon()
    {
        return $this->hasMany(HoaDon::class,'ma_can_ho','ma_can_ho');
    }
}