<h2>Danh sách căn hộ</h2>

<a href="{{ route('can-ho.create') }}">Thêm mới</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Mã</th>
        <th>Số căn hộ</th>
        <th>Tầng</th>
        <th>Diện tích</th>
        <th>Trạng thái</th>
        <th>Loại căn hộ</th>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{ $item->ma_can_ho }}</td>
        <td>{{ $item->so_can_ho }}</td>
        <td>{{ $item->tang }}</td>
        <td>{{ $item->dien_tich }}</td>
        <td>{{ $item->trang_thai }}</td>
        <td>{{ $item->loaiCanHo->ten_loai ?? '' }}</td>
    </tr>
    @endforeach
</table>