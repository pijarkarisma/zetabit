@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
        <table class="table">
                <thead align="center">
                    <tr>
                        <th scope="row">ID</th>
                        <th scope="col">ID Kategori</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Garansi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Terjual</th>
                    </tr>
                </thead>
            <tbody>
                @foreach($produk as $produks)
                <tr>
                    <th scope="row">{{$produks->id}}</th>
                    <td align="center">{{$produks->kategoriId}}</td>
                    <td align="center">{{$produks->brand}}</td>
                    <td align="center">{{$produks->model}}</td>
                    <td align="center">{{$produks->deskripsi}}</td>
                    <td align="center">{{$produks->garansi}}</td>
                    <td align="center">{{$produks->harga}}</td>
                    <td align="center">{{$produks->stock}}</td>
                    <td align="center">{{$produks->terjual}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
