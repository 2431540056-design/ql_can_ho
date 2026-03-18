@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Phản ánh cư dân</h2>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<div class="card shadow-sm">
<div class="card-body">

<table class="table table-bordered table-hover text-center">

<thead class="table-light">
<tr>
<th>ID</th>
<th>Cư dân</th>
<th>Nội dung</th>
<th>Trạng thái</th>
<th width="150">Hành động</th>
</tr>
</thead>

<tbody>

@foreach($phanAnhs as $pa)

<tr>

<td>{{ $pa->ma_phan_anh }}</td>

<td>{{ $pa->cuDan->ma_cu_dan ?? '' }}</td>

<td class="text-start">{{ $pa->noi_dung }}</td>

<td>
<span class="badge 
{{ $pa->trang_thai == 'da_xu_ly' ? 'bg-success' : 'bg-warning' }}">
{{ $pa->trang_thai }}
</span>
</td>

<td>

<a href="{{ url('/admin/phan-anh/'.$pa->ma_phan_anh.'/edit') }}"
class="btn btn-warning btn-sm">
Sửa
</a>

<form action="{{ url('/admin/phan-anh/'.$pa->ma_phan_anh) }}"
method="POST"
style="display:inline;"
onsubmit="return confirm('Xóa phản ánh?')">

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