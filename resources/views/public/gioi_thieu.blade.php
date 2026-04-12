@extends('layouts.public')

@section('content')

<!-- HERO -->
<div class="bg-dark text-white text-center p-5">
    <h1>Căn hộ BabyCute</h1>
    <p>Không gian sống hiện đại - tiện nghi - an toàn</p>
</div>

<div class="container mt-5">

    <!-- SLIDER -->
    <div id="slider" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner">

<div class="carousel-item active">
    <img src="{{ asset('images/slider1.jpg') }}" class="d-block w-100">
</div>

<div class="carousel-item">
    <img src="{{ asset('images/slider2.jpg') }}" class="d-block w-100">
</div>

<div class="carousel-item">
    <img src="{{ asset('images/slider3.jpg') }}" class="d-block w-100">
</div>

</div>

<!-- nút chuyển -->
<button class="carousel-control-prev" data-bs-target="#slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" data-bs-target="#slider" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
</button>

</div>

    <!-- VỊ TRÍ -->
    <div class="card mb-4 apartment-card">
        <div class="card-body">
            <h4>📍 Vị trí</h4>
            <p>
                Căn hộ BabyCute nằm tại trung tâm thành phố, 
                gần các trục đường chính, thuận tiện di chuyển đến 
                các khu vực quan trọng.
            </p>
        </div>
    </div>

    <!-- TIỆN ÍCH -->
    <div class="card mb-4 apartment-card">
        <div class="card-body">
            <h4>🏢 Tiện ích</h4>

            <div class="row text-center mt-3">
                <div class="col-md-3">🏊 Hồ bơi</div>
                <div class="col-md-3">🏋️ Gym</div>
                <div class="col-md-3">🛝 Khu vui chơi</div>
                <div class="col-md-3">🛡️ An ninh 24/7</div>
            </div>

        </div>
    </div>

    <!-- KHUNG CẢNH -->
    <div class="card mb-4 apartment-card">
        <div class="card-body">
            <h4>🌇 Quang cảnh</h4>
            <p>
                Căn hộ có view thành phố đẹp, không gian thoáng mát, 
                gần công viên và khu cây xanh, mang lại môi trường sống trong lành.
            </p>
        </div>
    </div>

    <!-- XUNG QUANH -->
    <div class="card mb-5 apartment-card">
        <div class="card-body">

            <h4>📍 Tiện ích xung quanh</h4>

            <table class="table table-bordered mt-3">
                <thead class="table-light">
                    <tr>
                        <th>Địa điểm</th>
                        <th>Khoảng cách</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>🏫 Trường học</td>
                        <td>500 m</td>
                    </tr>
                    <tr>
                        <td>🏥 Bệnh viện</td>
                        <td>1 km</td>
                    </tr>
                    <tr>
                        <td>🛒 Siêu thị</td>
                        <td>300 m</td>
                    </tr>
                    <tr>
                        <td>🌳 Công viên</td>
                        <td>200 m</td>
                    </tr>
                    <tr>
                        <td>🏬 Trung tâm thương mại</td>
                        <td>2 km</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection