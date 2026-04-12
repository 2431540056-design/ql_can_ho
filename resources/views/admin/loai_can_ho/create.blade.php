@extends('layouts.admin')

@section('content')

<h2>Thêm loại căn hộ</h2>

<div class="card">
<div class="card-body">

<form method="POST" action="{{ url('/admin/loai-can-ho') }}">

@csrf

<div class="mb-3">
<label>Tên loại</label>
<input type="text" name="ten_loai" class="form-control" required>
</div>

<div class="mb-3">
<label>Giá cơ bản</label>
<input type="number" name="gia_co_ban" class="form-control" required>
</div>

<div class="mb-3">
<label>Diện tích</label>
<input type="number" name="gia_co_ban" class="form-control" required>
</div>

<button class="btn btn-primary">Thêm</button>

<a href="{{ url('/admin/loai-can-ho') }}" class="btn btn-secondary">
Quay lại
</a>

</form>

</div>
</div>

@endsection