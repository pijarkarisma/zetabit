@extends('layouts.table')

@section('konten')
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Heatsink</h1>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Tambah Produk Baru</button>
                </div>
                <br>
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
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
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
            </div>
        </div>
    </div>    
@endsection