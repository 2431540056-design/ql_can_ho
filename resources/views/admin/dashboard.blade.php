@extends('admin.layout')

@section('content')

<h2>Dashboard</h2>

<div style="display:flex;gap:20px">

<div style="background:#3498db;color:white;padding:20px;width:200px">
<h3>Tổng căn hộ</h3>
<h1>{{ $tongCanHo }}</h1>
</div>

<div style="background:#2ecc71;color:white;padding:20px;width:200px">
<h3>Tổng cư dân</h3>
<h1>{{ $tongCuDan }}</h1>
</div>

</div>

@endsection