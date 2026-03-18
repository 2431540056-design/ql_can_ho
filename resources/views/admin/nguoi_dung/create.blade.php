@extends('layouts.admin')

@section('content')

<h2>Thêm tài khoản</h2>

<div class="card">
<div class="card-body">

<form method="POST" action="{{ url('/admin/nguoi-dung') }}">

@csrf

<div class="mb-3">
<label>Tên</label>
<input type="text" name="ten" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Số điện thoại</label>
<input type="text" name="so_dien_thoai" class="form-control">
</div>

<div class="mb-3">
<label>Mật khẩu</label>
<input type="password" name="mat_khau" class="form-control" required>
</div>

<div class="mb-3">
<label>Vai trò</label>
<select name="vai_tro" class="form-control">
<option value="user">Người dùng</option>
<option value="admin">Admin</option>
</select>
</div>

<button class="btn btn-primary">Thêm</button>

<a href="/admin/nguoi-dung" class="btn btn-secondary">
Quay lại
</a>

</form>

</div>
</div>

@endsection