@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
        <table class="table">
                <thead align="center">
                    <tr>
                        <th scope="row">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Manufactur</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Terjual</th>
                        <?php $no = 0 ?>
                    </tr>
                </thead>
            <tbody>
                @foreach($produks as $produk)
                <tr>
                    <th scope="row">{{$produk->id}}</th>
                    <td align="center">{{produk->kategori}}</td>
                    <td align="center">{{produk->manufaktur}}</td>
                    <td align="center">{{produk->harga}}</td>
                    <td align="center">{{produk->terjual}}</td>
                    <td align="center">{{produk->garansi}}</td>
                    <td align="center">{{produk->tanggal_rilis}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
