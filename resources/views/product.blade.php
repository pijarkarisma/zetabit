@extends('layouts.table')

@section('konten')
    <div>
        <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="row">ID</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Manufactur</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Terjual</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
            <tbody>
                @foreach($produk as $prdk)
                <tr>
                    <th scope="row">{{$prdk->id}}</th>
                    <td>{{prdk->kategori}}</td>
                    <td>{{prdk->manufaktur}}</td>
                    <td>{{prdk->harga}}</td>
                    <td>{{prdk->terjual}}</td>
                    <td>{{prdk->garansi}}</td>
                    <td>{{prdk->tanggal_rilis}}</td>
                    <td>
                        <a href="#" class="badge bg-success">edit</a>
                        <a href="#" class="badge bg-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection