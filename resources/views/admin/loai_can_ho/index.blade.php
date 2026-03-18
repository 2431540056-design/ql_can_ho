@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Quản lý hợp đồng</h2>

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
<th>Căn hộ</th>
<th>Cư dân</th>
<th>Giá thuê</th>
<th>Ngày bắt đầu</th>
<th>Trạng thái</th>
<th width="150">Hành động</th>
</tr>
</thead>

<tbody>

@foreach($hopDongs as $hd)

<tr class="text-center">

<td>{{ $hd->ma_hop_dong }}</td>

<td>{{ $hd->canHo->so_can_ho ?? '' }}</td>

<td>{{ $hd->cuDan->ma_cu_dan ?? '' }}</td>

<td class="text-primary fw-bold">
{{ number_format($hd->gia_thue) }} VNĐ
</td>

<td>{{ $hd->ngay_bat_dau }}</td>

<td>
<span class="badge 
{{ $hd->trang_thai == 'dang_hieu_luc' ? 'bg-success' : 'bg-secondary' }}">
{{ $hd->trang_thai }}
</span>
</td>

<td>

<a href="{{ url('/admin/hop-dong/'.$hd->ma_hop_dong.'/edit') }}"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="{{ url('/admin/hop-dong/'.$hd->ma_hop_dong) }}"
method="POST"
style="display:inline;"
onsubmit="return confirm('Bạn có chắc muốn xóa không?')">

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