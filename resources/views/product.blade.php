@extends('layouts.admin_main')

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
                <tr>
                    <th scope="row">1</th>
                    <td>Laptop</td>
                    <td>Dell</td>
                    <td>Rp 6.500.000,-</td>
                    <td>100</td>
                    <td>50</td>
                    <td>
                        <a href="" class="badge bg-success">edit</a>
                        <a href="" class="badge bg-danger">delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection