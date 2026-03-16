@extends('layouts.public')

@section('content')

<div class="container mt-5">

<h2 class="mb-4">Căn hộ của tôi</h2>

@if($cudan && $cudan->canHo)

<div class="card mb-4 shadow">

<div class="card-body">

<h4>Căn hộ {{ $cudan->canHo->so_can_ho }}</h4>

<p>Tầng: {{ $cudan->canHo->tang }}</p>

<p>Diện tích: {{ $cudan->canHo->dien_tich }} m²</p>

</div>

</div>

@endif


<div class="row">

{{-- hóa đơn --}}

<div class="col-md-6">

<div class="card shadow">

<div class="card-header">
Hóa đơn gần nhất
</div>

<div class="card-body">

@foreach($hoadons as $hd)

<p>

{{ number_format($hd->so_tien) }} VNĐ  
<span class="badge bg-warning">
{{ $hd->trang_thai }}
</span>

</p>

@endforeach

</div>

</div>

</div>


{{-- thông báo --}}

<div class="col-md-6">

<div class="card shadow">

<div class="card-header">
Thông báo
</div>

<div class="card-body">

@foreach($thongbaos as $tb)

<p>{{ $tb->noi_dung }}</p>

@endforeach

</div>

</div>

</div>

</div>


<div class="mt-4">

<a href="/phan-anh/create" class="btn btn-primary">
Gửi phản ánh
</a>

</div>

</div>

@endsection