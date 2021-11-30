@extends('layouts.table')

@section('konten')
<div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">ID</th>
                                <th scope="col">ProdukID</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Kapasitas</th>
                                <th scope="col">Interface</th>
                                <th scope="col">RPM</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($storage as $stor)
                            <tr>
                                <th scope="row">{{$stor->id}}</th>
                                <td>{{$stor->produkId}}</td>
                                <td>{{$stor->jenis}}</td>
                                <td>{{$stor->tipe}}</td>
                                <td>{{$stor->kapasitas}}</td>
                                <td>{{$stor->interface}}</td>
                                <td>{{$stor->rpm}}</td>
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