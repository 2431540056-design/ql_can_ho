@extends('layouts.admin')

@section('content')

<h2>Thêm hợp đồng</h2>

<div class="card">
<div class="card-body">

<form method="POST" action="/admin/hop-dong">

@csrf

<label>Cư dân</label>
<select name="ma_cu_dan" class="form-control">

@foreach($cuDans as $cd)

<option value="{{ $cd->ma_cu_dan }}">
{{ $cd->nguoiDung->ho_ten }}
</option>

@endforeach

</select>

<label>Căn hộ</label>
<select name="ma_can_ho" class="form-control">

@foreach($canHos as $ch)

<option value="{{ $ch->ma_can_ho }}">
{{ $ch->so_can_ho }}
</option>

@endforeach

</select>

<label>Ngày bắt đầu</label>
<input type="date" name="ngay_bat_dau" class="form-control">

<label>Ngày kết thúc</label>
<input type="date" name="ngay_ket_thuc" class="form-control">

<label>Giá thuê</label>
<input type="number" name="gia_thue" class="form-control">

<label>Loại hợp đồng</label>
<input type="text" name="loai_hop_dong" class="form-control">

<label>Trạng thái</label>
<select name="trang_thai" class="form-control">

<option value="con_hieu_luc">Còn hiệu lực</option>
<option value="het_han">Hết hạn</option>

</select>

<br>

<button class="btn btn-success">Lưu</button>

</form>

@endsection