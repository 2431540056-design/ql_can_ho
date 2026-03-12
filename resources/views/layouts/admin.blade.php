<!DOCTYPE html>
<html lang="vi">
<head>

<meta charset="UTF-8">
<title>Admin - BabyCute Apartment</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
background:#f4f6f9;
}

.sidebar{
height:100vh;
width:240px;
position:fixed;
background:#1f2d3d;
color:white;
}

.sidebar a{
display:block;
padding:12px;
color:#c2c7d0;
text-decoration:none;
}

.sidebar a:hover{
background:#34495e;
color:white;
}

.content{
margin-left:240px;
padding:25px;
}

.brand{
font-size:20px;
font-weight:bold;
padding:15px;
}

</style>

</head>

<body>

<div class="sidebar">

<div class="brand">
<i class="fa fa-building"></i>
BabyCute Admin
</div>

<hr>

<a href="/admin">
<i class="fa fa-chart-line"></i>
Dashboard
</a>

<p class="ms-3 mt-3">Quản lý căn hộ</p>

<a href="/can-ho">
<i class="fa fa-house"></i>
Căn hộ
</a>

<a href="/loai-can-ho">
<i class="fa fa-layer-group"></i>
Loại căn hộ
</a>

<a href="/cu-dan">
<i class="fa fa-users"></i>
Cư dân
</a>

<a href="/hop-dong">
<i class="fa fa-file-contract"></i>
Hợp đồng
</a>

<hr>

<p class="ms-3">Tài chính</p>

<a href="/hoa-don">
<i class="fa fa-file-invoice"></i>
Hóa đơn
</a>

<a href="/thanh-toan">
<i class="fa fa-money-bill"></i>
Thanh toán
</a>

<hr>

<a href="/phan-anh">
<i class="fa fa-triangle-exclamation"></i>
Phản ánh cư dân
</a>

<a href="/thong-bao">
<i class="fa fa-bell"></i>
Thông báo
</a>

<hr>

<a href="/logout" class="text-danger">
<i class="fa fa-right-from-bracket"></i>
Đăng xuất
</a>

</div>

<div class="content">

@yield('content')

</div>

</body>
</html>