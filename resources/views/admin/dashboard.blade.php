<!DOCTYPE html>
<html>
<head>
    <title>Trang quản trị</title>

    <style>

body{
    margin:0;
    font-family:Arial;
}

.sidebar{
    width:260px;
    height:100vh;
    background:#1f2d3d;
    color:white;
    position:fixed;
}

.sidebar h2{
    text-align:center;
    padding:20px;
}

.sidebar ul{
    list-style:none;
    padding:0;
}

.sidebar ul li{
    padding:15px 20px;
}

.sidebar ul li a{
    color:white;
    text-decoration:none;
}

.sidebar ul li:hover{
    background:#2c3e50;
}

.content{
    margin-left:260px;
    padding:30px;
}

    </style>
</head>

<body>

<div class="sidebar">

<h2>Quản trị viên</h2>

<ul>

<li><a href="/admin">Dashboard</a></li>

<li><a href="/can-ho">Quản lý căn hộ</a></li>

<li><a href="/loai-can-ho">Loại căn hộ</a></li>

<li><a href="#">Khách hàng</a></li>

<li><a href="#">Hợp đồng</a></li>

<li><a href="#">Thanh toán</a></li>

<li style="color:red">Đ