@extends('layouts.table')

@section('konten')
<div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">ID</th>
                                <th scope="col">ProdukID</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Gen</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($processor as $pro)
                            <tr>
                                <th scope="row">{{$pro->id}}</th>
                                <td>{{$pro->produkId}}</td>
                                <td>{{$pro->tipe}}</td>
                                <td>{{$pro->gen}}</td>
                                <td>{{$pro->deskripsi}}</td>
                                <td>
                                    <a href="" class="badge bg-success">edit</a>
                                    <a href="" class="badge bg-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
@endsection