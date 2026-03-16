@extends('layouts.admin')

@section('content')

<h2>Danh sách thanh toán</h2>

<a href="/admin/thanh-toan/create" class="btn btn-primary mb-3">
Thêm thanh toán
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Hóa đơn</th>
<th>Số tiền</th>
<th>Ngày thanh toán</th>
<th>Phương thức</th>
<th>Hành động</th>
</tr>

@foreach($thanhToans as $tt)

<tr>

<td>{{ $tt->ma_thanh_toan }}</td>

<td>{{ $tt->ma_hoa_don }}</td>

<td>{{ number_format($tt->so_tien) }} VNĐ</td>

<td>{{ $tt->ngay_thanh_toan }}</td>

<td>{{ $tt->phuong_thuc }}</td>

<td>

<a href="/admin/thanh-toan/{{ $tt->ma_thanh_toan }}/edit"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="/thanh-toan/{{ $tt->ma_thanh_toan }}"
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