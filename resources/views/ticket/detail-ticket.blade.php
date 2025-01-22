@extends('layouts.main')
@section('detail-page')
<div class="mt-4">
    <h3>Informasi ticket</h3>
    <div class="mt-3">
        @include('components.card-ticket')
        <h3 class="mt-4">Informasi Perumpang</h3>
        <form class="mt-3 p-3 border">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Isi email anda</div>
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Type Penumpang</option>
                <option value="1">Dewasa (18 - 35 tahun)</option>
                <option value="2">Anak anak (6 - 17 tahun)</option>
                <option value="3">Balita (1 - 5 tahun)</option>
              </select>
              <div class="mt-4 d-flex gap-2">
                  <button type="submit" class="btn btn-primary">Pesan tiket</button>
                  <a href="/tiket" class="btn btn-danger">Batal</a>
              </div>
          </form>
    </div>
</div>
@endsection