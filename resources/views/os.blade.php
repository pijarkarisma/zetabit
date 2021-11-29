@extends('layouts.table')

@section('konten')
                <div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">ID</th>
                                <th scope="col">ProdukID</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($os as $os)
                                <tr>
                                <th scope="row">{{$os->id}}</th>
                                <td>{{$os->produkId}}</td>
                                <td>{{$os->tipe}}</td>
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