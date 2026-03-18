@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Sửa thanh toán</h2>

<div class="card">
<div class="card-body">

<form method="POST"
action="{{ url('/admin/thanh-toan/'.$thanhToan->ma_thanh_toan) }}">

@csrf
@method('PUT')

<div class="mb-3">
<label>Mã hóa đơn</label>
<input type="number"
name="ma_hoa_don"
value="{{ $thanhToan->ma_hoa_don }}"
class="form-control">
</div>

<div class="mb-3">
<label>Số tiền</label>
<input type="number"
name="so_tien"
value="{{ $thanhToan->so_tien }}"
class="form-control">
</div>

<div class="mb-3">
<label>Phương thức</label>
<select name="phuong_thuc" class="form-control">

<option value="tien_mat"
{{ $thanhToan->phuong_thuc == 'tien_mat' ? 'selected' : '' }}>
Tiền mặt
</option>

<option value="chuyen_khoan"
{{ $thanhToan->phuong_thuc == 'chuyen_khoan' ? 'selected' : '' }}>
Chuyển khoản
</option>

</select>
</div>

<div class="mb-3">
<label>Ngày thanh toán</label>
<input type="date"
name="ngay_thanh_toan"
value="{{ $thanhToan->ngay_thanh_toan }}"
class="form-control">
</div>

<button class="btn btn-primary">
Cập nhật
</button>

</form>

</div>
</div>

@endsection