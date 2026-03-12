<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanAnh extends Model
{

protected $table = 'phan_anh';

protected $primaryKey = 'ma_phan_anh';

protected $fillable = [
'ma_cu_dan',
'noi_dung',
'trang_thai'
];

}