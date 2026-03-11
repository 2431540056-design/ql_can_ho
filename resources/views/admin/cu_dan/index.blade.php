@extends('admin.layout')

@section('content')

<h2>Danh sách cư dân</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Họ tên</th>
<th>Email</th>
</tr>

@foreach($cuDans as $cudan)

<tr>
<td>{{ $cudan->ma_nguoi_dung }}</td>
<td>{{ $cudan->ho_ten }}</td>
<td>{{ $cudan->email }}</td>
</tr>

@endforeach

</table>

@endsection