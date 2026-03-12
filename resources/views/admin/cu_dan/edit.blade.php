@extends('layouts.admin')

@section('content')

<h2>Sửa cư dân</h2>

<form method="POST"
action="/cu-dan/{{ $cuDan->ma_cu_dan }}">

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

<button class="btn btn-primary">
Cập nhật
</button>

</form>

@endsection