<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\VaiTro;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'nguoi_dung';

    protected $primaryKey = 'ma_nguoi_dung';

    protected $fillable = [
        'ho_ten',
        'email',
        'mat_khau',
        'ma_vai_tro'
    ];

    protected $hidden = [
        'mat_khau'
    ];

    public function getAuthPassword()
    {
        return $this->mat_khau;
    }

    public function vaiTro()
    {
        return $this->belongsTo(VaiTro::class,'ma_vai_tro','ma_vai_tro');
    }

    public function cuDan()
{
    return $this->hasOne(CuDan::class,'ma_nguoi_dung','ma_nguoi_dung');
}
}