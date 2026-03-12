@extends('layouts.admin')

@section('content')

<h2>Thêm loại căn hộ</h2>

<form method="POST" action="/loai-can-ho">

@csrf

<div class="mb-3">
<label>Tên loại</label>
<input type="text" name="ten_loai" class="form-control">
</div>

<div class="mb-3">
<label>Diện tích trung bình</label>
<input type="number" name="dien_tich_tb" class="form-control">
</div>

<div class="mb-3">
<label>Giá cơ bản</label>
<input type="number" name="gia_co_ban" class="form-control">
</div>

<div class="mb-3">
<label>Mô tả</label>
<textarea name="mo_ta" class="form-control"></textarea>
</div>

<button class="btn btn-success">
Lưu
</button>

</form>

@endsection