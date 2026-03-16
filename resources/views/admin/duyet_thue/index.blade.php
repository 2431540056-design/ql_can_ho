@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Danh sách yêu cầu thuê</h2>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<div class="card shadow-sm">
<div class="card-body">

<table class="table table-bordered table-hover align-middle">

<thead class="table-light">

<tr class="text-center">

<th>ID</th>
<th>Người dùng</th>
<th>Email</th>
<th>Căn hộ</th>
<th>Ngày hẹn</th>
<th>Trạng thái</th>
<th width="200">Hành động</th>

</tr>

</thead>

<tbody>

@foreach($yeuCaus as $yc)

<tr class="text-center">

<td>{{ $yc->ma_yeu_cau }}</td>

<td>{{ $yc->nguoiDung->ho_ten }}</td>

<td>{{ $yc->nguoiDung->email }}</td>

<td>
<span class="badge bg-info">
{{ $yc->canHo->so_can_ho ?? $yc->ma_can_ho }}
</span>
</td>

<td>{{ $yc->ngay_hen }}</td>

<td>

@if($yc->trang_thai == 'cho_duyet')

<span class="badge bg-warning text-dark">
Chờ duyệt
</span>

@elseif($yc->trang_thai == 'da_duyet')

<span class="badge bg-success">
Đã duyệt
</span>

@else

<span class="badge bg-danger">
Từ chối
</span>

@endif

</td>

<td>

@if($yc->trang_thai == 'cho_duyet')

<form action="/admin/duyet-thue/{{ $yc->ma_yeu_cau }}" method="POST" style="display:inline;">
@csrf

<button class="btn btn-success btn-sm">
✔ Duyệt
</button>

</form>

<form action="/admin/tu-choi-thue/{{ $yc->ma_yeu_cau }}" method="POST" style="display:inline;">
@csrf

<button class="btn btn-danger btn-sm">
✖ Từ chối
</button>

</form>

@else

<span class="text-muted">
Đã xử lý
</span>

@endif

</td>

</tr>

@endforeach

</tbody>

</table>

</div>
</div>

@endsection