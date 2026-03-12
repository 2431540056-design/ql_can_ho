<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CuDan extends Model
{

protected $table = 'cu_dan';

protected $primaryKey = 'ma_cu_dan';

protected $fillable = [
'ho_ten',
'so_dien_thoai',
'ma_can_ho'
];

}