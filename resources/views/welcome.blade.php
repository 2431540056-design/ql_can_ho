@extends('layouts.public')

@section('content')

<!-- HERO -->

<div class="hero text-white d-flex align-items-center">
    <div class="container text-center">
        <h1 class="fw-bold display-4">Căn hộ BabyCute</h1>
        <p class="lead">Không gian sống hiện đại – tiện nghi – an toàn</p>
        <a href="/can-ho" class="btn btn-warning btn-lg mt-3 px-4">
            Xem căn hộ
        </a>
    </div>
</div>


<!-- GIỚI THIỆU -->

<div class="container mt-5">
<div class="row align-items-center">

<div class="col-md-6">
    <h2 class="fw-bold">Về chúng tôi</h2>
    <p class="text-muted">
        BabyCute Apartment mang đến không gian sống hiện đại, an ninh và tiện nghi cho cư dân.
    </p>

    <p>
        Hệ thống giúp cư dân dễ dàng thanh toán, xem thông báo và quản lý hợp đồng thuê.
    </p>

    <ul class="list-unstyled mt-3">
        <li>✔ Vị trí trung tâm</li>
        <li>✔ An ninh 24/7</li>
        <li>✔ Dịch vụ đầy đủ</li>
    </ul>
</div>

<div class="col-md-6">
    <img src="{{ asset('images/slider1.jpg') }}" class="img-fluid rounded shadow">
</div>

</div>
</div>


<!-- CĂN HỘ NỔI BẬT -->

<div class="container mt-5">

<h2 class="text-center mb-4">Căn hộ nổi bật</h2>

<div class="row">

<div class="col-md-4">

<div class="card shadow">

<img src="https://images.unsplash.com/photo-1560448204-603b3fc33ddc"
class="card-img-top">

<div class="card-body">

<h5>Căn hộ A101</h5>

<p>Diện tích: 45m²</p>

<a href="/can-ho" class="btn btn-primary w-100">
Xem chi tiết
</a>

</div>

</div>

</div>


<div class="col-md-4">

<div class="card shadow">

<img src="https://images.unsplash.com/photo-1560448075-bb485b067938"
class="card-img-top">

<div class="card-body">

<h5>Căn hộ A102</h5>

<p>Diện tích: 50m²</p>

<a href="/can-ho" class="btn btn-primary w-100">
Xem chi tiết
</a>

</div>

</div>

</div>


<div class="col-md-4">

<div class="card shadow">

<img src="https://images.unsplash.com/photo-1560448204-61dc36dc98c8"
class="card-img-top">

<div class="card-body">

<h5>Căn hộ A103</h5>

<p>Diện tích: 60m²</p>

<a href="/can-ho" class="btn btn-primary w-100">
Xem chi tiết
</a>

</div>

</div>

</div>

</div>

</div>


<!-- DỊCH VỤ -->

<div class="container mt-5 text-center">

<h2 class="fw-bold mb-4">Tiện ích nổi bật</h2>

<div class="row">

<div class="col-md-4">
    <div class="card p-4 shadow-sm">
        <h5>🏊 Hồ bơi</h5>
        <p>Không gian thư giãn cho cư dân</p>
    </div>
</div>

<div class="col-md-4">
    <div class="card p-4 shadow-sm">
        <h5>🏋️ Gym</h5>
        <p>Phòng tập hiện đại</p>
    </div>
</div>

<div class="col-md-4">
    <div class="card p-4 shadow-sm">
        <h5>🌳 Công viên</h5>
        <p>Không gian xanh thoáng mát</p>
    </div>
</div>

</div>
</div>

@endsection