<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThanhToan extends Model
{

protected $table='thanh_toan';
protected $primaryKey='ma_thanh_toan';

protected $fillable=[
'ma_hoa_don',
'so_tien',
'ngay_thanh_toan',
'phuong_thuc'
];

public function hoaDon()
{
return $this->belongsTo(HoaDon::class,'ma_hoa_don');
}

}