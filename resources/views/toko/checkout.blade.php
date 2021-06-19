@extends('toko.layout')
@section('content')
<div class="container mt-3">
    @if(session()->has('pesan'))
    <div class="alert alert-success">
        {{ session()->get('pesan') }}
    </div>
    @elseif (session()->has('pesanHapus'))
    <div class="alert alert-success">
        {{ session()->get('pesanHapus') }}
    </div>
    @endif
    <a href="{{route('kasir.index')}}" class=" btn btn-success mb-1">Kembali Belanja</a>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @php
            $subtotal = 0;
            @endphp
            @forelse ($data as $kawan)
            @php
            $total = $kawan->jumlah*$kawan->harga_menu;
            @endphp
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$kawan->nama_menu}}</td>
                <td>{{$kawan->jumlah}} </td>
                <td>{{$kawan->harga_menu}}</td>
                <td>{{$total}}</td>
                <td><a href="{{route('keranjang.edit',['kode_menu' => $kawan->kode_menu])}}" class=" btn btn-success rounded">Edit</a>
                    <a href="{{route('keranjang.destroy',['kode_menu' => $kawan->kode_menu])}}" class=" btn btn-danger rounded">Hapus</a>
                </td>
            </tr>
            @php
            $subtotal += $total;
            @endphp
            @empty
            <td colspan="8" class="text-center fw-bold">Tidak ada data...</td>
            @endforelse
            <tr>
                <td colspan=" 3"></td>
                <td class="table-dark"> <b> Harga total</b></td>
                <td class="table-dark">{{$subtotal}}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{route('kasir.terakhir')}}" class="btn btn-success">Confirm</a>
</div>
@endsection
