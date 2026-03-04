@extends('admin.layout')

@section('content')

<h2>Sửa căn hộ</h2>

<form action="{{ route('can-ho.update',$canHo->ma_can_ho) }}" method="POST">
@csrf
@method('PUT')

<p>Số căn hộ</p>
<input type="text" name="so_can_ho" value="{{ $canHo->so_can_ho }}">

<p>Tầng</p>
<input type="number" name="tang" value="{{ $canHo->tang }}">

<p>Diện tích</p>
<input type="number" name="dien_tich" value="{{ $canHo->dien_tich }}">

<p>Trạng thái</p>
<input type="text" name="trang_thai" value="{{ $canHo->trang_thai }}">

<p>Loại căn hộ</p>
<select name="ma_loai_can_ho">

@foreach($loaiCanHo as $item)

<option value="{{ $item->ma_loai_can_ho }}"
@if($item->ma_loai_can_ho == $canHo->ma_loai_can_ho) selected @endif>

{{ $item->ten_loai }}

</option>

@endforeach

</select>

<br><br>

<button type="submit">Cập nhật</button>

</form>
@endsection