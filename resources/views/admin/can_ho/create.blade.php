@extends('layouts.admin')

@section('content')

<h2>Thêm căn hộ</h2>

<div class="card">
<div class="card-body">

<form method="POST" action="{{ url('/admin/can-ho') }}">

@csrf

<div class="mb-3">

<label>Số căn hộ</label>

<input type="text"
name="so_can_ho"
class="form-control">

</div>

<div class="mb-3">

<label>Tầng</label>

<input type="number"
name="tang"
class="form-control">

</div>

<div class="mb-3">

<label>Diện tích</label>

<input type="number"
name="dien_tich"
class="form-control">

</div>

<div class="mb-3">

<label>Trạng thái</label>

<select name="trang_thai" class="form-control">

<option value="trong">Trống</option>
<option value="dang_o">Đang ở</option>

</select>

</div>

<div class="mb-3">

<label>Loại căn hộ</label>

<select name="ma_loai_can_ho" class="form-control">

@foreach($loaiCanHos as $loai)

<option value="{{ $loai->ma_loai_can_ho }}">
{{ $loai->ten_loai }}
</option>

@endforeach

</select>

</div>

<button class="btn btn-success">
Lưu
</button>

</form>

@endsection