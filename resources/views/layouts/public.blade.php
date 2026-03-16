<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>Căn hộ</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>

body{
background:#f8f9fa;
font-family:Arial;
}

/* Navbar */

.navbar{
background:#1E3A5F;
}

.navbar a{
color:white !important;
font-weight:500;
}

.navbar a:hover{
color:#C9A227 !important;
}

.apartment-card{
border-radius:14px;
overflow:hidden;
transition:0.3s;
}

.apartment-card:hover{
transform:translateY(-10px);
box-shadow:0 12px 30px rgba(0,0,0,0.2);
}

.apartment-img{
height:220px;
object-fit:cover;
}

.status-badge{
position:absolute;
top:10px;
left:10px;
font-size:13px;
padding:6px 10px;
}

.hot-badge{
position:absolute;
top:10px;
right:10px;
font-size:13px;
padding:6px 10px;
}

.apartment-info{
display:flex;
justify-content:space-between;
margin-top:10px;
color:#555;
}

.price{
font-size:20px;
font-weight:bold;
color:#1E3A5F;
margin-top:10px;
}

/* logo */

.logo{
font-weight:bold;
font-size:20px;
color:#C9A227 !important;
}

/* button */

.btn-primary{
background:#1E3A5F;
border:none;
}

.btn-detail{
border-radius:8px;
margin-top:10px;
}

.btn-primary:hover{
background:#16324f;
}

/* footer */

.footer{
background:#1E3A5F;
color:white;
padding:30px;
margin-top:50px;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand logo" href="/">Căn Hộ BabyCute</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav me-auto">

<li class="nav-item">
<a class="nav-link" href="/">Trang chủ</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/gioi-thieu">Giới thiệu</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/dich-vu">Dịch vụ</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/can-ho">Căn hộ</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/lien-he">Liên hệ</a>
</li>

</ul>

<ul class="navbar-nav">

@guest

<li class="nav-item">
<a class="nav-link" href="/login">Đăng nhập</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/register">Đăng ký</a>
</li>

@endguest

@auth

<li class="nav-item">
<a class="nav-link">
Xin chào {{ Auth::user()->ho_ten }}
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/my-apartment">
Căn hộ của tôi
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/logout">
Đăng xuất
</a>
</li>

@endauth

</ul>

</div>

</div>

</nav>


<!-- CONTENT -->

@yield('content')


<!-- FOOTER -->

<div class="footer text-center">

<h5>Hệ thống quản lý căn hộ</h5>

<p>© 2026 Apartment Management</p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>