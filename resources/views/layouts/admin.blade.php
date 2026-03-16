<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BabyCute Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<style>

body{
margin:0;
font-family:Segoe UI, Arial;
font-size:14px;
background:#f4f6f9;
}

/* wrapper layout */
.wrapper{
display:flex;
min-height:100vh;
}

/* sidebar */
.sidebar{
width:240px;
background:#243447;
color:white;
padding-top:15px;
flex-shrink:0;
}

.sidebar h3{
font-size:18px;
padding:10px 20px;
margin-bottom:10px;
}

.sidebar h4{
font-size:13px;
padding:10px 20px;
color:#9ca3af;
text-transform:uppercase;
}

.sidebar a{
display:block;
padding:10px 20px;
font-size:14px;
color:#e5e7eb;
text-decoration:none;
}

.sidebar a:hover{
background:#34495e;
}

.sidebar a.active{
background:#1abc9c;
color:white;
}

/* content */
.content{
flex:1;
padding:25px;
}

/* dashboard cards */
.card h5{
font-size:14px;
}

.card h3{
font-size:26px;
font-weight:bold;
}

</style>
</head>

<body>

<div class="wrapper">

<div class="sidebar">

<h3>BabyCute Admin</h3>

<a href="/admin">Dashboard</a>

<h4>Quản lý căn hộ</h4>

<a href="/admin/nguoi-dung">Quản lý tài khoản</a>
<a href="/admin/can-ho">Căn hộ</a>
<a href="/admin/loai-can-ho">Loại căn hộ</a>
<a href="/admin/cu-dan">Cư dân</a>
<a href="/admin/hop-dong">Hợp đồng</a>
<a href="/admin/duyet-thue">Duyệt thuê</a>


<h4>Tài chính</h4>

<a href="/admin/hoa-don">Hóa đơn</a>
<a href="/admin/thanh-toan">Thanh toán</a>

<h4>Dịch vụ</h4>

<a href="/admin/phan-anh">Phản ánh cư dân</a>
<a href="/admin/thong-bao">Thông báo</a>

<a href="/logout" style="color:#ff4d4f;margin-top:20px;">
Đăng xuất
</a>

</div>

<div class="content">

<div style="display:flex; justify-content:flex-end; margin-bottom:15px;">

<div style="position:relative; font-size:22px;">

<a href="/admin/phan-anh" style="text-decoration:none">

<i class="bi bi-bell"></i>

<span style="
position:absolute;
top:-8px;
right:-10px;
background:red;
color:white;
font-size:12px;
padding:2px 6px;
border-radius:50%;
">

{{ \App\Models\PhanAnh::where('trang_thai','moi')->count() }}

</span>

</a>

</div>

</div>

@yield('content')

</div>

</div>

</body>
</html>