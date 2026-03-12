@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Quản lý tài khoản</h2>

<a href="/nguoi-dung/create" class="btn btn-primary mb-3">
Thêm tài khoản
</a>

<div class="card">
<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="table-light">

<tr>
<th>ID</th>
<th>Họ tên</th>
<th>Email</th>
<th>Vai trò</th>
<th width="150">Hành động</th>
</tr>

</thead>

<tbody>

@foreach($users as $user)

<tr>

<td>{{ $user->ma_nguoi_dung }}</td>

<td>{{ $user->ho_ten }}</td>

<td>{{ $user->email }}</td>

<td>

@if($user->vaiTro->ten_vai_tro == 'admin')

<span class="badge bg-danger">Admin</span>

@else

<span class="badge bg-success">Cư dân</span>

@endif

</td>

<td>

<a href="/nguoi-dung/{{ $user->ma_nguoi_dung }}/edit"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="/nguoi-dung/{{ $user->ma_nguoi_dung }}"
method="POST"
style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Xóa
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>
</div>

@endsection