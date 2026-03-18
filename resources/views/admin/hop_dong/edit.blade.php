@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Sửa hợp đồng</h2>

<div class="card">
<div class="card-body">

<form method="POST"
action="{{ url('/admin/hop-dong/'.$hopDong->ma_hop_dong) }}">

@csrf
@method('PUT')

<div class="mb-3">
<label>Giá thuê</label>
<input type="number"
name="gia_thue"
value="{{ $hopDong->gia_thue }}"
class="form-control">
</div>

<div class="mb-3">
<label>Ngày bắt đầu</label>
<input type="date"
name="ngay_bat_dau"
value="{{ date('Y-m-d', strtotime($hopDong->ngay_bat_dau)) }}"
class="form-control">
</div>

<div class="mb-3">
<label>Ngày kết thúc</label>
<input type="date"
name="ngay_ket_thuc"
value="{{ date('Y-m-d', strtotime($hopDong->ngay_ket_thuc)) }}"
class="form-control">
</div>

<div class="mb-3">
<label>Trạng thái</label>
<select name="trang_thai" class="form-control">

<option value="dang_hieu_luc"
{{ $hopDong->trang_thai == 'dang_hieu_luc' ? 'selected' : '' }}>
Đang hiệu lực
</option>

<option value="het_han"
{{ $hopDong->trang_thai == 'het_han' ? 'selected' : '' }}>
Hết hạn
</option>

</select>
</div>

<button class="btn btn-primary">
Cập nhật
</button>

</form>

</div>
</div>

@endsection