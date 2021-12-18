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
                @foreach($produks as $produk)
                <tr>
                    <th scope="row">{{$produk->id}}</th>
                    <td align="center">{{produk->kategoriId}}</td>
                    <td align="center">{{produk->brand}}</td>
                    <td align="center">{{produk->model}}</td>
                    <td align="center">{{produk->deskripsi}}</td>
                    <td align="center">{{produk->garansi}}</td>
                    <td align="center">{{produk->harga}}</td>
                    <td align="center">{{produk->stock}}</td>
                    <td align="center">{{produk->terjual}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
