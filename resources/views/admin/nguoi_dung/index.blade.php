@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Quản lý tài khoản</h2>

<a href="{{ url('/admin/nguoi-dung/create') }}" class="btn btn-primary mb-3">
Thêm tài khoản
</a>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<div class="card shadow-sm">
<div class="card-body">

<table class="table table-bordered table-hover align-middle">

<thead class="table-light text-center">
<tr>
<th>ID</th>
<th>Tên</th>
<th>Email</th>
<th>SĐT</th>
<th>Vai trò</th>
<th width="180">Hành động</th>
</tr>
</thead>

<tbody>

@foreach($users as $user)

<tr class="text-center">

<td>{{ $user->ma_nguoi_dung }}</td>

<td>{{ $user->ho_ten }}</td>

<td>{{ $user->email }}</td>

<td>{{ $user->cuDan->so_dien_thoai ?? '' }}</td>

<td>
<span class="badge 
{{ $user->vaiTro->ten_vai_tro == 'admin' ? 'bg-danger' : 'bg-primary' }}">

{{ $user->vaiTro->ten_vai_tro == 'admin' ? '👑 Admin' : '👤 Cư dân' }}

</span>
</td>

<td>

<a href="{{ url('/admin/nguoi-dung/'.$user->ma_nguoi_dung.'/edit') }}"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="{{ url('/admin/nguoi-dung/'.$user->ma_nguoi_dung) }}"
method="POST"
style="display:inline;"
onsubmit="return confirm('Bạn có chắc muốn xóa tài khoản này không?')">

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