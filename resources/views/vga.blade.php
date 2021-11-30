@extends('layouts.table')

@section('konten')
<div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">ID</th>
                                <th scope="col">ProdukID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vga as $vga)
                            <tr>
                                <th scope="row">{{$vga->id}}</th>
                                <td>{{$vga->produkId}}</td>
                                <td>{{$vga->nama}}</td>
                                <td>
                                    <a href="" class="badge bg-success">edit</a>
                                    <a href="" class="badge bg-danger">delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
@endsection