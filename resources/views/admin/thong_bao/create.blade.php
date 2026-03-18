@extends('layouts.admin')

@section('content')

<h2 class="mb-3">
{{ isset($thongBao) ? 'Sửa thông báo' : 'Thêm thông báo' }}
</h2>

<div class="card">
<div class="card-body">

<form method="POST"
action="{{ isset($thongBao) 
? url('/admin/thong-bao/'.$thongBao->ma_thong_bao)
: url('/admin/thong-bao') }}">

@csrf

@if(isset($thongBao))
@method('PUT')
@endif

<div class="mb-3">
<label>Tiêu đề</label>
<input type="text"
name="tieu_de"
value="{{ $thongBao->tieu_de ?? '' }}"
class="form-control">
</div>

<div class="mb-3">
<label>Nội dung</label>
<textarea name="noi_dung" class="form-control">
{{ $thongBao->noi_dung ?? '' }}
</textarea>
</div>

<button class="btn btn-primary">
Lưu
</button>

</form>

</div>
</div>

@endsection