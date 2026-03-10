<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập Căn hộ BabyCute</title>
</head>
<body>

<h2>Đăng nhập Căn hộ BabyCute</h2>

@if(session('error'))
<p style="color:red">{{session('error')}}</p>
@endif

<form method="POST" action="/login">

@csrf

<label>Email</label>
<br>
<input type="email" name="email">

<br><br>

<label>Password</label>
<br>
<input type="password" name="password">

<br><br>

<button type="submit">Đăng nhập</button>

</form>

<a href="/">Quay về trang chủ</a>

</body>
</html>