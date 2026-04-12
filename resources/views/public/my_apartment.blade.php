@extends('layouts.public')

@section('content')

<div class="container mt-5">

<h2 class="mb-4">Căn hộ của tôi</h2>

@if($cuDan && $cuDan->canHo)

<div class="card mb-4 shadow">

<div class="card-body">

<h4>Căn hộ {{ $cuDan->canHo->so_can_ho }}</h4>

<p>Tầng: {{ $cuDan->canHo->tang }}</p>

<p>Diện tích: {{ $cuDan->canHo->dien_tich }} m²</p>

</div>

</div>

@endif


<div class="row">

{{-- hóa đơn --}}
<div class="col-md-4">
<div class="card shadow">
<div class="card-header">Hóa đơn gần nhất</div>
<div class="card-body">

@if($hoaDon)
    <p class="fw-bold text-primary">
        {{ number_format($hoaDon->tong_tien) }} VNĐ
    </p>

    <span class="badge {{ $hoaDon->trang_thai == 'da_thanh_toan' ? 'bg-success' : 'bg-danger' }}">
        {{ $hoaDon->trang_thai }}
    </span>
@else
    <p>Không có hóa đơn</p>
@endif

</div>
</div>
</div>


{{-- hợp đồng --}}
<div class="col-md-4">
<div class="card shadow">
<div class="card-header">Hợp đồng của tôi</div>
<div class="card-body">

@if($hopDong)
    <p><strong>Mã:</strong> {{ $hopDong->ma_hop_dong }}</p>
    <p><strong>Bắt đầu:</strong> {{ $hopDong->ngay_bat_dau }}</p>
    <p><strong>Kết thúc:</strong> {{ $hopDong->ngay_ket_thuc }}</p>
@else
    <p>Chưa có hợp đồng</p>
@endif

</div>
</div>
</div>


{{-- thông báo --}}
<div class="col-md-4">
<div class="card shadow">
<div class="card-header">Thông báo</div>
<div class="card-body">

@foreach($thongbaos as $tb)
    <p>{{ $tb->noi_dung }}</p>
@endforeach

</div>
</div>
</div>

</div>


<div class="mt-4">

<a href="/my-apartment/phan-anh/create" class="btn btn-primary">
    Gửi phản ánh
</a>

</div>

</div>

@endsection