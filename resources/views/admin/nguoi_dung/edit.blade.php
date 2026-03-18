@extends('layouts.admin')

@section('content')

<h2>Sửa tài khoản</h2>

<div class="card">
<div class="card-body">

<form method="POST"
action="{{ url('/admin/nguoi-dung/'.$user->ma_nguoi_dung) }}">

@csrf
@method('PUT')

<div class="mb-3">
<label>Tên</label>
<input type="text"
name="ten"
value="{{ $user->ten }}"
class="form-control"
required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email"
name="email"
value="{{ $user->email }}"
class="form-control"
required>
</div>

<div class="mb-3">
<label>SĐT</label>
<input type="text"
name="so_dien_thoai"
value="{{ $user->so_dien_thoai }}"
class="form-control">
</div>

<div class="mb-3">
<label>Mật khẩu (để trống nếu không đổi)</label>
<input type="password"
name="mat_khau"
class="form-control">
</div>

<div class="mb-3">
<label>Vai trò</label>
<select name="vai_tro" class="form-control">

<option value="user"
@if($user->vai_tro=='user') selected @endif>
Người dùng
</option>

<option value="admin"
@if($user->vai_tro=='admin') selected @endif>
Admin
</option>

</select>
</div>

<button class="btn btn-primary">Cập nhật</button>

<a href="/admin/nguoi-dung" class="btn btn-secondary">
Quay lại
</a>

</form>

</div>
</div>

@endsection