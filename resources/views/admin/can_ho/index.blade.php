@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Danh sách căn hộ</h2>

<a href="/admin/can-ho/create" class="btn btn-primary mb-3">
Thêm căn hộ
</a>

<div class="card">

<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="table-light">

<tr>
<th>ID</th>
<th>Số căn hộ</th>
<th>Tầng</th>
<th>Diện tích</th>
<th>Trạng thái</th>
<th>Loại căn hộ</th>
<th width="150">Hành động</th>
</tr>

</thead>

<tbody>

@foreach($canHos as $canHo)

<tr>

<td>{{ $canHo->ma_can_ho }}</td>

<td>{{ $canHo->so_can_ho }}</td>

<td>{{ $canHo->tang }}</td>

<td>{{ $canHo->dien_tich }} m²</td>

<td>

@if($canHo->trang_thai == 'trong')

<span class="badge bg-success">
Trống
</span>

@else

<span class="badge bg-danger">
Đang ở
</span>

@endif

</td>

<td>

{{ $canHo->loaiCanHo->ten_loai ?? '' }}

</td>

<td>

<a href="/admin/can-ho/{{ $canHo->ma_can_ho }}/edit"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="/can-ho/{{ $canHo->ma_can_ho }}"
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