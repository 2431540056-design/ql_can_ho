@extends('layouts.public')

@section('content')

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow">

<div class="card-body">

<h3 class="text-center mb-4">
Đăng ký tài khoản
</h3>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form method="POST" action="/register">
@csrf

<input type="text" name="ho_ten" placeholder="Họ tên" class="form-control">

<input type="email" name="email" placeholder="Email" class="form-control">

<input type="text" name="so_dien_thoai" placeholder="Số điện thoại" class="form-control">

<input type="password" name="password" placeholder="Mật khẩu" class="form-control">

<button class="btn btn-primary">Đăng ký</button>

</form>

<div class="text-center mt-3">

Đã có tài khoản?

<a href="/login">
Đăng nhập
</a>

</div>

</div>

</div>

</div>

</div>

</div>

@endsection