@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Thông báo cư dân</h2>

<a href="/admin/thong-bao/create" class="btn btn-primary mb-3">
Thêm thông báo
</a>

<div class="card shadow-sm">
<div class="card-body">

<table class="table table-bordered table-hover text-center">

<thead class="table-light">
<tr>
<th>ID</th>
<th>Tiêu đề</th>
<th>Nội dung</th>
<th width="150">Hành động</th>
</tr>
</thead>

<tbody>

@foreach($thongBaos as $tb)

<tr>

<td>{{ $tb->ma_thong_bao }}</td>

<td class="fw-bold">{{ $tb->tieu_de }}</td>

<td class="text-start">{{ $tb->noi_dung }}</td>

<td>

<a href="{{ url('/admin/thong-bao/'.$tb->ma_thong_bao.'/edit') }}"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="{{ url('/admin/thong-bao/'.$tb->ma_thong_bao) }}"
method="POST"
style="display:inline;"
onsubmit="return confirm('Xóa thông báo?')">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Xóa
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>
</div>

@endsection