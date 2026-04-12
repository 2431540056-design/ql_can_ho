@extends('layouts.admin')

@section('content')

<h2>Thêm hóa đơn</h2>

<div class="card">
<div class="card-body">

<form method="POST" action="{{ url('/admin/hoa-don') }}">

@csrf

<div class="mb-3">
<label>Căn hộ</label>

<select name="ma_can_ho" class="form-control">

@foreach($canHos as $ch)

<option value="{{ $ch->ma_can_ho }}">
Căn hộ {{ $ch->ma_can_ho }}
</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label>Tổng tiền</label>
<input type="number" name="tong_tien" class="form-control">
</div>

<div class="mb-3">
<label>Hạn thanh toán</label>
<input type="date" name="han_thanh_toan" class="form-control">
</div>

<div class="mb-3">
<label>Trạng thái</label>

<select name="trang_thai" class="form-control">

<option value="Chưa thanh toán">Chưa thanh toán</option>
<option value="Đã thanh toán">Đã thanh toán</option>

</select>

</div>

<button class="btn btn-success">
Lưu
</button>

</form>

@endsection