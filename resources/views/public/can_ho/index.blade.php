@extends('layouts.public')

@section('content')

<div class="container mt-5">

<form method="GET" class="row mb-4">

<div class="col-md-4">

<input type="number" name="min_price"
placeholder="Giá từ"
class="form-control">

</div>

<div class="col-md-4">

<input type="number" name="max_price"
placeholder="Giá đến"
class="form-control">

</div>

<div class="col-md-4">

<button class="btn btn-primary w-100">
Lọc căn hộ
</button>

</div>

</form>

<h2 class="mb-4 text-center">Danh sách căn hộ</h2>

<div class="row">

@foreach($canHos as $canho)

<div class="col-md-4 mb-4">

<div class="card apartment-card shadow">

<div class="position-relative">

<img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2"
class="card-img-top apartment-img">

@if($canho->trang_thai == 'trong')
<span class="badge bg-success status-badge">Còn trống</span>
@else
<span class="badge bg-danger status-badge">Đã thuê</span>
@endif

@if($canho->loaiCanHo->gia_co_ban < 5000000)
<span class="badge bg-warning hot-badge">HOT</span>
@endif

</div>

<div class="card-body">

<h5 class="card-title fw-bold">
Căn hộ {{ $canho->so_can_ho }}
</h5>

<div class="apartment-info">

<span>🏢 Tầng {{ $canho->tang }}</span>

<span>📐 {{ $canho->dien_tich }} m²</span>

</div>

<p class="price">
{{ number_format($canho->loaiCanHo->gia_co_ban) }} VNĐ
</p>

<a href="/can-ho/{{ $canho->ma_can_ho }}"
class="btn btn-primary w-100 btn-detail">
Xem chi tiết
</a>

</div>

</div>

</div>

@endforeach

</div>

<div class="mt-4">
{{ $canHos->links() }}
</div>

</div>

@endsection