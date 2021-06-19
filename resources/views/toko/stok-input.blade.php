@extends('toko.layout')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <h1>Form Tambah Menu</h1>
            <hr>
            <form action="{{route('stok.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="nama_menu" class="col-md-3 col-form-label text-md-right">Nama Menu *</label>
                    <div class="col-md-6">
                        <input type="text" name="nama_menu" id="nama_menu" class="form-control @error('nama_menu') is-invalid @enderror" value="{{old('nama_menu')}}">
                        @error('nama_menu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori_menu" class="col-md-3 col-form-label text-md-right">Kategori Menu *</label>
                    <div class="col-md-6">
                        <select name="kategori_menu" id="kategori_menu" class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                            <option value="Snack">Snack</option>
                        </select>
                        @error('kategori_menu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_menu" class="col-md-3 col-form-label text-md-right">Harga *</label>
                    <div class="col-md-6">
                        <input type="text" name="harga_menu" id="harga_menu" class="form-control @error('harga_menu') is-invalid @enderror" value="{{old('harga_menu')}}">
                        @error('harga_menu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar_menu" class="col-md-3 col-form-label text-md-right">Gambar</label>
                    <div class="col-md-6">
                        <input type="file" class="form-control-file" id="gambar_menu" name="gambar_menu">
                        @error('gambar_menu')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
