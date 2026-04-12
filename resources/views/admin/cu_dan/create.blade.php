@extends('layouts.admin')

@section('content')

<h2>Thêm cư dân</h2>

<div class="card">
<div class="card-body">

<form method="POST" action="{{ url('/admin/cu-dan') }}">
    
@csrf

<div class="mb-3">
<label>Tên cư dân</label>
<input type="text" name="ten_cu_dan" class="form-control">
</div>

<div class="mb-3">
<label>Số điện thoại</label>
<input type="text" name="so_dien_thoai" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>CCCD</label>
<input type="text" name="cccd" class="form-control">
</div>

<div class="mb-3">
<label>Căn hộ</label>

<select name="ma_can_ho" class="form-control">

@foreach($canHos as $canHo)

<option value="{{ $canHo->ma_can_ho }}">
{{ $canHo->so_can_ho }}
</option>

@endforeach

</select>

</div>

<button class="btn btn-success">
Lưu
</button>

</form>

@endsection