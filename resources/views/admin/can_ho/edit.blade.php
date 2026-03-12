@extends('layouts.admin')

@section('content')

<h2>Sửa căn hộ</h2>

<form method="POST"
action="/can-ho/{{ $canHo->ma_can_ho }}">

@csrf
@method('PUT')

<div class="mb-3">

<label>Số căn hộ</label>

<input type="text"
name="so_can_ho"
value="{{ $canHo->so_can_ho }}"
class="form-control">

</div>

<div class="mb-3">

<label>Tầng</label>

<input type="number"
name="tang"
value="{{ $canHo->tang }}"
class="form-control">

</div>

<div class="mb-3">

<label>Diện tích</label>

<input type="number"
name="dien_tich"
value="{{ $canHo->dien_tich }}"
class="form-control">

</div>

<button class="btn btn-primary">
Cập nhật
</button>

</form>

@endsection