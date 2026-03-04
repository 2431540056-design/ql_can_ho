@extends('admin.layout')

@section('content')

<h2>Thêm căn hộ</h2>

<form action="{{ route('can-ho.store') }}" method="POST">
    @csrf

    <p>Số căn hộ</p>
    <input type="text" name="so_can_ho">

    <p>Tầng</p>
    <input type="number" name="tang">

    <p>Diện tích</p>
    <input type="number" name="dien_tich">

    <p>Trạng thái</p>
    <input type="text" name="trang_thai">

    <p>Loại căn hộ</p>
    <select name="ma_loai_can_ho">
        @foreach($loaiCanHo as $item)
            <option value="{{ $item->ma_loai_can_ho }}">
                {{ $item->ten_loai }}
            </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit">Lưu</button>
</form>
@endsection