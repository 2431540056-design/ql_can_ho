@extends('layouts.admin')

@section('content')

<h2>Phản ánh cư dân</h2>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Cư dân</th>
<th>Nội dung</th>
<th>Trạng thái</th>
<th>Hành động</th>
</tr>

@foreach($phanAnhs as $pa)

<tr>

<td>{{ $pa->ma_phan_anh }}</td>

<td>
{{ $pa->cuDan->nguoiDung->ho_ten ?? '' }}
</td>

<td>{{ $pa->noi_dung }}</td>

<td>

@if($pa->trang_thai == 'moi')

<span class="badge bg-danger">Mới</span>

@elseif($pa->trang_thai == 'dang_xu_ly')

<span class="badge bg-warning">Đang xử lý</span>

@else

<span class="badge bg-success">Đã xử lý</span>

@endif

</td>

<td>

{{-- Nút xác nhận xử lý --}}

@if($pa->trang_thai != 'da_xu_ly')

<form action="/phan-anh/{{$pa->ma_phan_anh}}/xu-ly"
method="POST"
style="display:inline">

@csrf
@method('PUT')

<button class="btn btn-success btn-sm">
Đã xử lý
</button>

</form>

@endif


{{-- Nút xóa --}}

<form action="/phan-anh/{{ $pa->ma_phan_anh }}"
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

</table>

@endsection