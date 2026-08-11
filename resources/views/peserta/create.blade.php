@extends('app')
@section('content')
    <form action="{{ url('store-peserta') }}" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Umur</label>
            <input type="number" class="form-control" name="umur">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
@endsection
{{-- untuk menggabungkan template menggunakan extends
dan untuk menghubungkan yield menggunakan section dan endsection
dan doctype html hanya berada pada master app agar lebih rapih dan ini
dinamakan proses templateing --}}



