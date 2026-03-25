@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Danh sách loại căn hộ</h2>

<a href="{{ url('/admin/loai-can-ho/create') }}" class="btn btn-primary mb-3">
Thêm loại căn hộ
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
<th>Tên loại</th>
<th>Giá cơ bản</th>
<th width="150">Hành động</th>
</tr>
</thead>

<tbody>

@foreach($loaiCanHos as $loai)

<tr class="text-center">

<td>{{ $loai->ma_loai_can_ho }}</td>

<td>{{ $loai->ten_loai }}</td>

<td class="text-primary fw-bold">
{{ number_format($loai->gia_co_ban) }} VNĐ
</td>

<td>

<a href="{{ url('/admin/loai-can-ho/'.$loai->ma_loai_can_ho.'/edit') }}"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="{{ url('/admin/loai-can-ho/'.$loai->ma_loai_can_ho) }}"
method="POST"
style="display:inline;"
onsubmit="return confirm('Bạn có chắc muốn xóa loại căn hộ này không?')">

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