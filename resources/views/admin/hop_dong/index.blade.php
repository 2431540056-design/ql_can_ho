@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Danh sách hợp đồng</h2>

<a href="/hop-dong/create" class="btn btn-primary mb-3">
Thêm hợp đồng
</a>

<div class="card">
<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="table-light">
<tr>
<th>ID</th>
<th>Cư dân</th>
<th>Căn hộ</th>
<th>Ngày bắt đầu</th>
<th>Ngày kết thúc</th>
<th>Giá thuê</th>
<th>Loại</th>
<th>Trạng thái</th>
<th>Hành động</th>
</tr>
</thead>

<tbody>

@foreach($hopDongs as $hd)

<tr>

<td>{{ $hd->ma_hop_dong }}</td>

<td>
{{ $hd->cuDan->nguoiDung->ho_ten ?? '' }}
</td>

<td>
{{ $hd->canHo->so_can_ho ?? '' }}
</td>

<td>{{ $hd->ngay_bat_dau }}</td>

<td>{{ $hd->ngay_ket_thuc }}</td>

<td>{{ number_format($hd->gia_thue) }} VNĐ</td>

<td>{{ $hd->loai_hop_dong }}</td>

<td>

@if($hd->trang_thai == 'con_hieu_luc')

<span class="badge bg-success">Còn hiệu lực</span>

@else

<span class="badge bg-secondary">Hết hạn</span>

@endif

</td>

<td>

<a href="/hop-dong/{{ $hd->ma_hop_dong }}/edit"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="/hop-dong/{{ $hd->ma_hop_dong }}"
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