@extends('layouts.table')

@section('konten')
<div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">Kategori</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Model</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($processor as $pro)
                            <tr>
                                <th scope="row">{{$pro->id}}</th>
                                <td>{{$pro->kategoriid}}</td>
                                <td>{{$pro->brand}}</td>
                                <td>{{$pro->model}}</td>
                                <td>{{$pro->deskripsi}}</td>
                                <td>{{$pro->harga}}</td>
                                <td>{{$pro->stock}}</td>
                                <td>{{$pro->terjual}}</td>
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