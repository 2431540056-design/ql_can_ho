@extends('layouts.admin')

@section('content')

<h2>Sửa căn hộ</h2>

<div class="card">
<div class="card-body">

<form method="POST"
action="{{ url('/admin/can-ho/'.$canHo->ma_can_ho) }}">

@csrf
@method('PUT')

<div class="mb-3">

<label>Số căn hộ</label>

<input type="text"
name="so_can_ho"
value="{{ $canHo->so_can_ho }}"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Tầng</label>

<input type="number"
name="tang"
value="{{ $canHo->tang }}"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Diện tích</label>

<input type="number"
name="dien_tich"
value="{{ $canHo->dien_tich }}"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Trạng thái</label>

<select name="trang_thai" class="form-control">

<option value="trong"
@if($canHo->trang_thai=='trong') selected @endif>
Trống
</option>

<option value="dang_o"
@if($canHo->trang_thai=='dang_o') selected @endif>
Đang ở
</option>

</select>

</div>

<div class="mb-3">

<label>Loại căn hộ</label>

<select name="ma_loai_can_ho" class="form-control">

@foreach($loaiCanHos as $loai)

<option value="{{ $loai->ma_loai_can_ho }}"
@if($loai->ma_loai_can_ho == $canHo->ma_loai_can_ho) selected @endif>

{{ $loai->ten_loai }}

</option>

@endforeach

</select>

</div>

<button class="btn btn-primary">
Cập nhật
</button>

<a href="{{ url('/admin/can-ho') }}"
class="btn btn-secondary">
Quay lại
</a>

</form>

</div>
</div>

@endsection