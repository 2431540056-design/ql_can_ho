@extends('layouts.admin')

@section('content')

<h2>Sửa cư dân</h2>

<form action="{{ url('admin/cu-dan/'.$cuDan->ma_cu_dan) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Tên cư dân</label>

<input type="text"
name="ten_cu_dan"
value="{{ $cuDan->ten_cu_dan }}"
class="form-control">

</div>

<div class="mb-3">

<label>Số điện thoại</label>

<input type="text"
name="so_dien_thoai"
value="{{ $cuDan->so_dien_thoai }}"
class="form-control">

</div>

<div class="mb-3">

<label>CCCD</label>

<input type="text"
name="cccd"
value="{{ $cuDan->cccd }}"
class="form-control">

</div>

<button class="btn btn-primary">
Cập nhật
</button>

</form>

@endsection