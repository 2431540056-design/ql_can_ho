@extends('layouts.admin')

@section('content')

<h2>Tạo thông báo</h2>

<form method="POST" action="/thong-bao">

@csrf

<div class="mb-3">
<label>Tiêu đề</label>
<input type="text" name="tieu_de" class="form-control">
</div>

<div class="mb-3">
<label>Nội dung</label>
<textarea name="noi_dung" class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Gửi cho cư dân</label>

<select name="ma_cu_dan" class="form-control">

<option value="">Tất cả cư dân</option>

@foreach($cuDans as $cd)

<option value="{{$cd->ma_cu_dan}}">
{{$cd->nguoiDung->ho_ten ?? ''}}
</option>

@endforeach

</select>

</div>

<button class="btn btn-success">
Gửi thông báo
</button>

</form>

@endsection