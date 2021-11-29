@extends('layouts.table')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Product</h1>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Tambah Produk Baru</button>
                </div>
                <br>
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
                                <th scope="col"></th>
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
            </div>
        </div>
    </div>    
@endsection