@extends('toko.layout')
@section('content')
<table class="table mt-4">
    <thead class="table-dark">
        <th scope="col">#</th>
        <th scope="col">Nama Menu</th>
        <th scope="col">Kode Menu</th>
        <th scope="col">gambar</th>
        <th scope="col">Kategori</th>
        <th scope="col">Harga</th>
        <th scope="col">Jumlah</th>
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
            <td>
                <form action="{{route('kasir.checkout')}}" method="POST" id="form">
                    @csrf
                    <input type="text" name="jumlah">
                    <button type="submit" form="form">Submit</button>
                </form>
            </td>
        </tr>
        @empty
        <td colspan="8" class="text-center fw-bold">Tidak ada data...</td>
        @endforelse
    </tbody>
</table>

@endsection
