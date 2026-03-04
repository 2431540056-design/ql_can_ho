@extends('admin.layout')

@section('content')

<h2>Danh sách loại căn hộ</h2>

<a href="{{ route('loai-can-ho.create') }}">Thêm mới</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Mã</th>
        <th>Tên loại</th>
        <th>Diện tích TB</th>
        <th>Giá cơ bản</th>
        <th>Mô tả</th>
        <th>Hành động</th>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{ $item->ma_loai_can_ho }}</td>
        <td>{{ $item->ten_loai }}</td>
        <td>{{ $item->dien_tich_tb }}</td>
        <td>{{ $item->gia_co_ban }}</td>
        <td>{{ $item->mo_ta }}</td>
        <td>
            <a href="{{ route('loai-can-ho.edit', $item->ma_loai_can_ho) }}">Sửa</a>

            <form action="{{ route('loai-can-ho.destroy', $item->ma_loai_can_ho) }}"
                  method="POST"
                  style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection