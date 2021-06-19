@extends('toko.layout')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-3">
            <h1>Form edit keranjang</h1>
            <hr>
            @foreach ($data as $p)

            <form action="{{route('keranjang.edit',['kode_menu' => $p->kode_menu ])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="kode_menu" value="{{$p->kode_menu}}">
                <input type="hidden" name="id" value="{{$p->id}}">
                <div class="form-group row">
                    <label for="jumlah" class="col-md-3 col-form-label text-md-right">Jumlah </label>
                    <div class="col-md-6">
                        <input type="number" name="jumlah" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{$p->jumlah ?? old('jumlah') ?? ''}}">
                        @error('jumlah')
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
