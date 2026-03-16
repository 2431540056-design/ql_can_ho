@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Danh sách cư dân</h2>

<a href="/admin/cu-dan/create" class="btn btn-primary mb-3">
Thêm cư dân
</a>

<div class="card">
<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="table-light">

<tr>
<th>ID</th>
<th>Tên cư dân</th>
<th>Điện thoại</th>
<th>Email</th>
<th>CCCD</th>
<th>Căn hộ</th>
<th width="150">Hành động</th>
</tr>

</thead>

<tbody>

@foreach($cuDans as $cuDan)

<tr>

<td>{{ $cuDan->ma_cu_dan }}</td>

<td>{{ $cuDan->nguoiDung->ho_ten }}</td>

<td>{{ $cuDan->so_dien_thoai }}</td>

<td>{{ $cuDan->nguoiDung->email }}</td>

<td>{{ $cuDan->cccd }}</td>

<td>

{{ $cuDan->canHo->so_can_ho ?? '' }}

</td>

<td>

<a href="/admin/cu-dan/{{ $cuDan->ma_cu_dan }}/edit"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="{{ url('/admin/cu-dan/'.$cuDan->ma_cu_dan) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xóa cư dân này không?')" style="display:inline;">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Xóa
</button>

</form>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>
</div>

@endsection