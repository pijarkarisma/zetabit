@extends('layouts.table')

@section('konten')
            <div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="row">ID</th>
                                <th scope="col">ProdukID</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Nomor Seri</th>
                                <th scope="col">Voltage</th>
                                <th scope="col">Kapasitas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="badge bg-success">edit</a>
                                    <a href="" class="badge bg-danger">delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
@endsection