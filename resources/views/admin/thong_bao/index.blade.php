@extends('layouts.admin')

@section('content')

<h2>Thông báo cư dân</h2>

<a href="/thong-bao/create" class="btn btn-primary mb-3">
Tạo thông báo
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Tiêu đề</th>
<th>Gửi cho</th>
<th>Ngày gửi</th>
<th>Hành động</th>
</tr>

@foreach($thongBaos as $tb)

<tr>

<td>{{ $tb->ma_thong_bao }}</td>

<td>{{ $tb->tieu_de }}</td>

<td>
@if($tb->ma_cu_dan)
{{ $tb->cuDan->nguoiDung->ho_ten ?? '' }}
@else
Tất cả cư dân
@endif
</td>

<td>{{ $tb->ngay_gui }}</td>

<td>

<form action="/thong-bao/{{$tb->ma_thong_bao}}" method="POST">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Xóa
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection