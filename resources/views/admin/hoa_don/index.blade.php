@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Quản lý hóa đơn</h2>

<a href="{{ url('/admin/hoa-don/create') }}" class="btn btn-primary mb-3">
    Thêm hóa đơn
</a>

<div class="card">
<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="table-light text-center">
<tr>
<th>ID</th>
<th>Căn hộ</th>
<th>Số tiền</th>
<th>Hạn thanh toán</th>
<th>Trạng thái</th>
<th>Hành động</th>
</tr>
</thead>

<tbody>

@foreach($hoaDons as $hd)

<tr class="text-center">

<td>{{ $hd->ma_hoa_don }}</td>

<td>{{ $hd->canHo->so_can_ho ?? '' }}</td>

<td class="text-primary fw-bold">
{{ number_format($hd->tong_tien, 0, ',', '.') }} VNĐ
</td>

<td>{{ $hd->han_thanh_toan }}</td>

<td>
<span class="badge 
{{ $hd->trang_thai == 'da_thanh_toan' ? 'bg-success' : 'bg-danger' }}">
{{ $hd->trang_thai }}
</span>
</td>

<td>
    @if($hd->trang_thai == 'chua_thanh_toan')
        <form method="POST" action="/admin/hoa-don/thanh-toan/{{ $hd->ma_hoa_don }}" style="display:flex; gap:5px;">
            @csrf

            <select name="phuong_thuc" class="form-control" style="width:130px;" required>
                <option value=""></option>
                <option value="tien_mat">Tiền mặt</option>
                <option value="chuyen_khoan">Chuyển khoản</option>
            </select>

            <button class="btn btn-success btn-sm">
                Thanh toán
            </button>
        </form>
    @else
        <span class="text-muted">Đã thanh toán</span>
    @endif
</td>

</tr>

@endforeach

</tbody>

</table>

</div>
</div>

@endsection