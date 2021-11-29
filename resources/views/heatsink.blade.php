@extends('layouts.table')

@section('konten')
                <div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">ID</th>
                                <th scope="col">ProdukID</th>
                                <th scope="col">Watt</th>
                                <th scope="col">Material</th>
                                <th scope="col">Size</th>
                                <th scope="col">Weight</th>
                                <th scope="col">RPM</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- @foreach($heatsink as $hs)
                            <tr>
                                <th scope="row">{{$hs->id}}</th>
                                <td>{{$hs->produkId}}</td>
                                <td>{{$hs->watt}}</td>
                                <td>{{$hs->material}}</td>
                                <td>{{$hs->size}}</td>
                                <td>{{$hs->weight}}</td>
                                <td>{{}}</td>
                                <td>
                                    <a href="" class="badge bg-success">edit</a>
                                    <a href="" class="badge bg-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach -->
                        </tbody>
                    </table>
                </div> 
@endsection