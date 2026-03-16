@extends('layouts.public')

@section('content')

<div class="container mt-5">

<h2 class="mb-4">Căn hộ của tôi</h2>

@if($cudan && $cudan->canHo)

<div class="card shadow mb-4">

<img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2"
class="card-img-top"
style="height:250px;object-fit:cover;">

<div class="card-body">

<h4>Căn hộ {{ $cudan->canHo->so_can_ho }}</h4>

<p>Tầng {{ $cudan->canHo->tang }}</p>

<p>Diện tích {{ $cudan->canHo->dien_tich }} m²</p>

</div>

</div>

@endif


<div class="row">

{{-- hóa đơn --}}

<div class="col-md-6">

<div class="card shadow">

<div class="card-header bg-primary text-white">

Hóa đơn gần nhất

</div>

<div class="card-body">

@forelse($hoadons as $hd)

<p>

<strong>{{ number_format($hd->so_tien) }} VNĐ</strong>

<span class="badge bg-warning">

{{ $hd->trang_thai }}

</span>

</p>

@empty

<p>Không có hóa đơn</p>

@endforelse

</div>

</div>

</div>



{{-- thông báo --}}

<div class="col-md-6">

<div class="card shadow">

<div class="card-header bg-success text-white">

Thông báo

</div>

<div class="card-body">

@forelse($thongbaos as $tb)

<p>{{ $tb->noi_dung }}</p>

@empty

<p>Chưa có thông báo</p>

@endforelse

</div>

</div>

</div>

</div>



<div class="mt-4">

<a href="/phan-anh/create" class="btn btn-danger">

Gửi phản ánh

</a>

</div>

</div>

@endsection