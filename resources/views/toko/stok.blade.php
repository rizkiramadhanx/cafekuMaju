@extends('toko.layout')
@section('content')
<h1 class="text-center mt-5"><b><u>Pengolahan Stok</u></b></h1>

<a href="{{route('stok.tambah')}}" class="btn btn-success  mt-4 mb-1">Tambah Menu</a>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Menu</th>
            <th scope="col">Kode Menu</th>
            <th scope="col">gambar</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">#</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $i)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$i->nama_menu}}</td>
            <td>{{$i->kode_menu}}</td>
            <td><img src="{{asset('/storage/uploads/'.$i->gambar_menu)}}" width="50" height="50"></td>
            <td>{{$i->kategori_menu}}</td>
            <td>{{$i->harga_menu}}</td>
            <td>{{$i->jumlah_stok}}</td>
            <td><a class="btn btn-danger" href="{{route('stok.destroy',['id' => $i->kode_menu])}}">Hapus</a>
                <a class="btn btn-primary" href="{{route('stok.show',['id' => $i->kode_menu])}}">Edit</a>
            </td>
        </tr>
        @empty
        <td colspan="8" class="text-center fw-bold">Tidak ada data...</td>
        @endforelse

    </tbody>

</table>
@endsection
