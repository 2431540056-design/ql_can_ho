@extends('layouts.public')

@section('content')

<div class="container mt-5">

{{-- THÔNG BÁO --}}
@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<div class="row">

<!-- ẢNH CĂN HỘ -->
<div class="col-md-7">
<img 
src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2"
class="img-fluid rounded apartment-img"
alt="Căn hộ {{ $canho->so_can_ho }}"
>
</div>

<!-- THÔNG TIN -->
<div class="col-md-5">

<h2>Căn hộ {{ $canho->so_can_ho }}</h2>

<p class="text-muted">
Tầng {{ $canho->tang }}
</p>

<p>
Diện tích: {{ $canho->dien_tich }} m²
</p>

<h4 class="price text-primary">
{{ number_format($canho->loaiCanHo->gia_co_ban) }} VNĐ / tháng
</h4>

<hr>

<h5>Mô tả</h5>

<p>
Căn hộ hiện đại, đầy đủ tiện nghi,
phù hợp cho gia đình nhỏ hoặc người đi làm.
</p>

<h5 class="mt-4">Tiện ích</h5>

<ul>
<li>✔ Gần trung tâm</li>
<li>✔ Bãi đỗ xe</li>
<li>✔ An ninh 24/7</li>
<li>✔ Ban công rộng</li>
<li>✔ Thang máy</li>
</ul>

<hr>

{{-- CĂN HỘ CÒN TRỐNG --}}
@if($canho->trang_thai == 'trong')

    @auth

    <!-- NÚT MỞ MODAL -->
    <button 
    class="btn btn-success w-100 btn-lg"
    data-bs-toggle="modal"
    data-bs-target="#yeuCauThueModal">
    Yêu cầu thuê
    </button>

    @else

    <a href="{{ url('/login') }}" class="btn btn-warning w-100 btn-lg">
    Đăng nhập để thuê
    </a>

    @endauth


{{-- CĂN HỘ ĐÃ THUÊ --}}
@else

<button class="btn btn-secondary w-100 btn-lg" disabled>
Căn hộ đã được thuê
</button>

@endif

</div>

</div>

</div>


{{-- MODAL FORM YÊU CẦU THUÊ --}}
<div class="modal fade" id="yeuCauThueModal" tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title">
Yêu cầu thuê căn hộ {{ $canho->so_can_ho }}
</h5>

<button type="button" class="btn-close" data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<form action="{{ url('/yeu-cau-thue') }}" method="POST">

@csrf

<input type="hidden" name="ma_can_ho" value="{{ $canho->ma_can_ho }}">

<div class="mb-3">
<label class="form-label">Ngày hẹn ký hợp đồng</label>

<input 
type="date"
name="ngay_hen"
class="form-control"
min="{{ date('Y-m-d') }}"
required>

</div>

<div class="mb-3">

<label class="form-label">Giờ hẹn</label>

<input
type="time"
name="gio_hen"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Ghi chú</label>

<textarea
name="ghi_chu"
class="form-control"
rows="3">
</textarea>

</div>

<button class="btn btn-success w-100">
Gửi yêu cầu thuê
</button>

</form>

</div>

</div>

</div>

</div>

@endsection