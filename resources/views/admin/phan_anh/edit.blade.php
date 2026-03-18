@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Xử lý phản ánh</h2>

<div class="card">
<div class="card-body">

<form method="POST"
action="{{ url('/admin/phan-anh/'.$phanAnh->ma_phan_anh) }}">

@csrf
@method('PUT')

<div class="mb-3">
<label>Nội dung</label>
<textarea class="form-control" disabled>
{{ $phanAnh->noi_dung }}
</textarea>
</div>

<div class="mb-3">
<label>Trạng thái</label>
<select name="trang_thai" class="form-control">

<option value="chua_xu_ly"
{{ $phanAnh->trang_thai == 'chua_xu_ly' ? 'selected' : '' }}>
Chưa xử lý
</option>

<option value="dang_xu_ly"
{{ $phanAnh->trang_thai == 'dang_xu_ly' ? 'selected' : '' }}>
Đang xử lý
</option>

<option value="da_xu_ly"
{{ $phanAnh->trang_thai == 'da_xu_ly' ? 'selected' : '' }}>
Đã xử lý
</option>

</select>
</div>

<button class="btn btn-primary">Cập nhật</button>

</form>

</div>
</div>

@endsection