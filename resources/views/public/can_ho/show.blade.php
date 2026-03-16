@extends('layouts.public')

@section('content')

<div class="container mt-5">

<div class="row">

<div class="col-md-7">

<img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2"
class="img-fluid rounded apartment-img">

</div>

<div class="col-md-5">

<h2>Căn hộ {{ $canho->so_can_ho }}</h2>

<p class="text-muted">
Tầng {{ $canho->tang }}
</p>

<p>
Diện tích: {{ $canho->dien_tich }} m²
</p>

<h4 class="price">
{{ number_format($canho->loaiCanHo->gia_co_ban) }} VNĐ / tháng
</h4>

<hr>

<h5>Mô tả</h5>

<p>
Căn hộ hiện đại, đầy đủ tiện nghi,
phù hợp cho gia đình nhỏ hoặc người đi làm.
</p>

@if($canho->trang_thai == 'trong')

@if(Auth::check())

<form action="/yeu-cau-thue" method="POST">

@csrf

<input type="hidden" name="ma_can_ho" value="{{ $canho->ma_can_ho }}">

<div class="mb-3">

<label>Ngày hẹn ký hợp đồng</label>

<input type="date" name="ngay_hen" class="form-control" required>

</div>

<div class="mb-3">

<label>Giờ hẹn</label>

<input type="time" name="gio_hen" class="form-control" required>

</div>

<div class="mb-3">

<label>Ghi chú</label>

<textarea name="ghi_chu" class="form-control"></textarea>

</div>

<button class="btn btn-success w-100">
Gửi yêu cầu thuê
</button>

</form>

@else

<a href="/login" class="btn btn-warning w-100">
Đăng nhập để thuê
</a>

@endif

@endif

@else

<button class="btn btn-secondary w-100 btn-lg" disabled>
Căn hộ đã được thuê
</button>

@endif

</div>

</div>

</div>

@endsection