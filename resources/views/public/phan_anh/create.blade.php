@extends('layouts.public')

@section('content')

<div class="container mt-5">

<h2 class="mb-4">📩 Gửi phản ánh</h2>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<form method="POST" action="/my-apartment/phan-anh">
@csrf

<div class="mb-3">
    <label>Nội dung phản ánh</label>
    <textarea name="noi_dung" class="form-control" rows="5" required></textarea>
</div>

<button class="btn btn-primary">
    Gửi phản ánh
</button>

<a href="/my-apartment" class="btn btn-secondary">
    Quay lại
</a>

</form>

</div>

@endsection