@extends('layouts.admin')

@section('content')

<h2>Sửa loại căn hộ</h2>

<form method="POST"
action="/loai-can-ho/{{ $loaiCanHo->ma_loai_can_ho }}">

@csrf
@method('PUT')

<div class="mb-3">

<label>Tên loại</label>

<input type="text"
name="ten_loai"
value="{{ $loaiCanHo->ten_loai }}"
class="form-control">

</div>

<div class="mb-3">

<label>Diện tích trung bình</label>

<input type="number"
name="dien_tich_tb"
value="{{ $loaiCanHo->dien_tich_tb }}"
class="form-control">

</div>

<div class="mb-3">

<label>Giá cơ bản</label>

<input type="number"
name="gia_co_ban"
value="{{ $loaiCanHo->gia_co_ban }}"
class="form-control">

</div>

<div class="mb-3">

<label>Mô tả</label>

<textarea name="mo_ta"
class="form-control">

{{ $loaiCanHo->mo_ta }}

</textarea>

</div>

<button class="btn btn-primary">
Cập nhật
</button>

</form>

@endsection