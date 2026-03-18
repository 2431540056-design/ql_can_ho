@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Quản lý thanh toán</h2>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<div class="card shadow-sm">
<div class="card-body">

<table class="table table-bordered table-hover text-center">

<thead class="table-light">
<tr>
<th>ID</th>
<th>Mã hóa đơn</th>
<th>Số tiền</th>
<th>Phương thức</th>
<th>Ngày thanh toán</th>
<th width="180">Hành động</th>
</tr>
</thead>

<tbody>

@foreach($thanhToans as $tt)

<tr>

<td>{{ $tt->ma_thanh_toan }}</td>

<td>{{ $tt->ma_hoa_don }}</td>

<td class="text-success fw-bold">
{{ number_format($tt->so_tien) }} VNĐ
</td>

<td>
<span class="badge bg-info">
{{ $tt->phuong_thuc }}
</span>
</td>

<td>{{ $tt->ngay_thanh_toan }}</td>

<td>

<a href="{{ url('/admin/thanh-toan/'.$tt->ma_thanh_toan.'/edit') }}"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="{{ url('/admin/thanh-toan/'.$tt->ma_thanh_toan) }}"
method="POST"
style="display:inline;"
onsubmit="return confirm('Xóa thanh toán này?')">

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