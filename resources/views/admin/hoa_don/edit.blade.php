@extends('layouts.admin')

@section('content')

<h2>Sửa hóa đơn</h2>

<form method="POST" action="/hoa-don/{{ $hoaDon->ma_hoa_don }}">

@csrf
@method('PUT')

<div class="mb-3">
<label>Tổng tiền</label>

<input type="number"
name="tong_tien"
value="{{ $hoaDon->tong_tien }}"
class="form-control">

</div>

<div class="mb-3">
<label>Hạn thanh toán</label>

<input type="date"
name="han_thanh_toan"
value="{{ $hoaDon->han_thanh_toan }}"
class="form-control">

</div>

<div class="mb-3">

<label>Trạng thái</label>

<select name="trang_thai" class="form-control">

<option {{ $hoaDon->trang_thai=='Chưa thanh toán'?'selected':'' }}>
Chưa thanh toán
</option>

<option {{ $hoaDon->trang_thai=='Đã thanh toán'?'selected':'' }}>
Đã thanh toán
</option>

</select>

</div>

<button class="btn btn-primary">
Cập nhật
</button>

</form>

@endsection