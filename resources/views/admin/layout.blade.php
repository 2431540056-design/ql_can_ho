<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Trang quản trị</title>

<style>
body{
margin:0;
font-family:Arial;
display:flex;
}

.sidebar{
width:250px;
background:#1f2d3d;
color:white;
height:100vh;
padding:20px;
}

.sidebar a{
display:block;
color:white;
padding:10px;
text-decoration:none;
}

.sidebar a:hover{
background:#34495e;
}

.content{
flex:1;
padding:20px;
}
</style>

</head>

<body>

<div class="sidebar">

<h3>Trang quản trị</h3>

<a href="/">Dashboard</a>

<h4>Quản lý căn hộ</h4>

<a href="/can-ho">Danh sách căn hộ</a>
<a href="/can-ho/create">Thêm căn hộ</a>

<h4>Quản lý loại căn hộ</h4>

<a href="/loai-can-ho">Danh sách loại căn hộ</a>
<a href="/loai-can-ho/create">Thêm loại căn hộ</a>

</div>

<div class="content">

@yield('content')

</div>

</body>
</html>