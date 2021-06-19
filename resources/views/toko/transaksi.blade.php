@extends('toko.layout')
@section('content')
<table class="table mt-4">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Menu</th>
            <th scope="col">Kode Menu</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Jenis Perubahan</th>
            <th scope="col">Waktu</th>
            <th scope="col">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $i)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$i->nama_menu}}</td>
            <td>{{$i->kode_menu}}</td>
            <td>@if ($i->keterangan_transaksi == 'Berkurang')
                <span class="badge bg-danger">Berkurang</span>
                @else
                <span class="badge bg-success">Bertambah</span>
                @endif
            </td>
            <td>{{$i->kategori_tranksaksi}}</td>
            <td>{{$i->created_at}}</td>
            <td>{{$i->jumlah_stok}}</td>
        </tr>
        @empty
        <td colspan="8" class="text-center fw-bold">Tidak ada data...</td>
        @endforelse

    </tbody>
</table>
@endsection
