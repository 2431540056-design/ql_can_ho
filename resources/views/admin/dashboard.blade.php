@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Dashboard</h2>

<div class="row">

<div class="col-md-3">
<div class="card shadow">
<div class="card-body">

<h6>Căn hộ</h6>
<h3>{{$soCanHo}}</h3>

</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow">
<div class="card-body">

<h6>Cư dân</h6>
<h3>{{$soCuDan}}</h3>

</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow">
<div class="card-body">

<h6>Hóa đơn</h6>
<h3>{{$soHoaDon}}</h3>

</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow">
<div class="card-body">

<h6>Phản ánh</h6>
<h3>{{$soPhanAnh}}</h3>

</div>
</div>
</div>

</div>

@endsection