@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Danh sách loại căn hộ</h2>

<a href="/loai-can-ho/create" class="btn btn-primary mb-3">
Thêm loại căn hộ
</a>

<div class="card">
<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="table-light">

<tr>
<th>ID</th>
<th>Tên loại</th>
<th>Diện tích TB</th>
<th>Giá cơ bản</th>
<th>Mô tả</th>
<th width="150">Hành động</th>
</tr>

</thead>

<tbody>

@foreach($loaiCanHos as $loai)

<tr>

<td>{{ $loai->ma_loai_can_ho }}</td>

<td>{{ $loai->ten_loai }}</td>

<td>{{ $loai->dien_tich_tb }} m²</td>

<td>{{ number_format($loai->gia_co_ban) }} VNĐ</td>

<td>{{ $loai->mo_ta }}</td>

<td>

<a href="/loai-can-ho/{{ $loai->ma_loai_can_ho }}/edit"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="/loai-can-ho/{{ $loai->ma_loai_can_ho }}"
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