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
        'ten_cu_dan',
        'so_dien_thoai',
        'email',
        'cccd',
        'ma_can_ho'
    ];

    public function canHo()
    {
        return $this->belongsTo(CanHo::class,'ma_can_ho');
    }

    public function nguoiDung()
    {
        return $this->belongsTo(User::class,'ma_nguoi_dung','ma_nguoi_dung');
    }
}