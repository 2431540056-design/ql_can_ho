<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiCanHo extends Model
{
    use HasFactory;

    protected $table = 'loai_can_ho';

    protected $primaryKey = 'ma_loai_can_ho';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'ten_loai',
        'dien_tich_tb',
        'gia_co_ban',
        'mo_ta'
    ];

public function canHos()
{
    return $this->hasMany(CanHo::class, 'ma_loai_can_ho', 'ma_loai_can_ho');
}
}