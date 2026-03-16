@extends('layouts.public')

@section('content')

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow">

<div class="card-body p-4">

<h3 class="text-center mb-4">
Đăng nhập
</h3>

<form method="POST" action="/login">

@csrf

<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Mật khẩu</label>

<input type="password"
name="password"
class="form-control"
required>

</div>

<button class="btn btn-primary w-100">
Đăng nhập
</button>

</form>

<div class="text-center mt-3">

Chưa có tài khoản?

<a href="/register">
Đăng ký
</a>

</div>

</div>

</div>

</div>

</div>

</div>

@endsection