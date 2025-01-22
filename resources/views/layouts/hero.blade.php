@extends('layouts.main')
@section('form-hero')
<div style="background-image: url('/assets/home.jpeg'); background-repeat: no-repeat;background-size: cover;background-position: center;height: 100vh;">
    <div class="container d-flex justify-content-end">
        <form class="bg-light p-4 mt-5 rounded">
            <div class="mb-3">  
                <label for="from" class="form-label">Dari</label>
                <input type="text" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="to" class="">Ke</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="pergi" class="">Pergi</label>
                <input type="text" class="form-control">
            </div>
            <a href="/tiket" class="btn btn-primary w-100">Cari</a>
        </form>
    </div>
</div>
@endsection
