@extends('layouts.admin')

@section('content')

<h2>Thêm tài khoản</h2>

<form method="POST" action="/nguoi-dung">

@csrf

<div class="mb-3">
<label>Họ tên</label>
<input type="text" name="ho_ten" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>Mật khẩu</label>
<input type="password" name="mat_khau" class="form-control">
</div>

<div class="mb-3">

<label>Vai trò</label>

<select name="ma_vai_tro" class="form-control">

@foreach($vaiTros as $vaiTro)

<option value="{{ $vaiTro->ma_vai_tro }}">
{{ $vaiTro->ten_vai_tro }}
</option>

@endforeach

</select>

</div>

<button class="btn btn-success">
Lưu
</button>

</form>

@endsection