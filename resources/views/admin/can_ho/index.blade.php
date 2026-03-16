@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Danh sách căn hộ</h2>

<a href="{{ url('/admin/can-ho/create') }}" class="btn btn-primary mb-3">
Thêm căn hộ
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

<tr class="text-center">

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

<td>{{ $canHo->loaiCanHo->ten_loai ?? '' }}</td>

<td>

<a href="{{ url('/admin/can-ho/'.$canHo->ma_can_ho.'/edit') }}"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="{{ url('/admin/can-ho/'.$canHo->ma_can_ho) }}"
method="POST"
style="display:inline;"
onsubmit="return confirm('Bạn có chắc muốn xóa căn hộ này không?')">

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