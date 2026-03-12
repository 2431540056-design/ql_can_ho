@extends('layouts.admin')

@section('content')

<h2>Danh sách hóa đơn</h2>

<a href="/hoa-don/create" class="btn btn-primary mb-3">
Thêm hóa đơn
</a>

<table class="table table-bordered">

<tr>
<th>Mã hóa đơn</th>
<th>Mã căn hộ</th>
<th>Tổng tiền</th>
<th>Hạn thanh toán</th>
<th>Trạng thái</th>
<th>Hành động</th>
</tr>

@foreach($hoaDons as $hd)

<tr>

<td>{{ $hd->ma_hoa_don }}</td>

<td>{{ $hd->ma_can_ho }}</td>

<td>{{ number_format($hd->tong_tien) }} VNĐ</td>

<td>{{ $hd->han_thanh_toan }}</td>

<td>{{ $hd->trang_thai }}</td>

<td>

<a href="/hoa-don/{{ $hd->ma_hoa_don }}/edit"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="/hoa-don/{{ $hd->ma_hoa_don }}"
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