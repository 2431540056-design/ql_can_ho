@extends('layouts.admin')

@section('content')

<h2>Danh sách yêu cầu thuê</h2>

<table class="table">

<tr>
<th>User</th>
<th>Căn hộ</th>
<th>Ngày hẹn</th>
<th>Trạng thái</th>
<th>Hành động</th>
</tr>

@foreach($yeuCaus as $yc)

<tr>
<td>{{$yc->nguoiDung->ho_ten}}</td>
<td>{{$yc->canHo->ma_can_ho}}</td>
<td>{{$yc->ngay_hen}}</td>

<td>
<form action="/admin/duyet-thue/{{$yc->ma_yeu_cau}}" method="POST">
@csrf
<button type="submit">Duyệt</button>
</form>
</td>

</tr>

@endforeach

</table>

@endsection