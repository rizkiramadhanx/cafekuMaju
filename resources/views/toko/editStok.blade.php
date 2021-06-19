@extends('toko.layout')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-3">
            <h1>Form edit Stok</h1>
            <hr>
            @foreach ($data as $p)

            <form action="{{route('stok.edit',['id' => $p->kode_menu ])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="kode_menu" value="{{$p->kode_menu}}">
                <input type="hidden" name="id" value="{{$p->id}}">
                <div class="form-group row">
                    <label for="jumlah_stok" class="col-md-3 col-form-label text-md-right">Stok</label>
                    <div class="col-md-6">
                        <input type="number" name="jumlah_stok" id="jumlah_stok" class="form-control @error('jumlah_stok') is-invalid @enderror" value="{{$p->jumlah_stok ?? old('jumlah_stok') ?? ''}}">
                        @error('jumlah_stok')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
            @endforeach


        </div>
    </div>
</div>
@endsection
