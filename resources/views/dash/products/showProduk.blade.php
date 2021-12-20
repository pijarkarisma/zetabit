@extends('dash.dashboard')

@section('konten-produk-admin')
<div><h2>All Order Products</h2></div>
<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Description</th>
                    <th scope="col">Garansi</th>
                    <!-- <th scope="col">Gambar</th> -->
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Sold</th>
                    <?php $no = 0 ?>
                </tr>
            </thead>
            <tbody align="center">
                @foreach($produk as $produks)
                <tr>
                    <td align="center">{{++$no}}</td>
                    <td align="center">{{$produks->kategoriName}}</td>
                    <td align="center">{{$produks->produkName}}</td>
                    <td align="center">{{$produks->brand}}</td>
                    <td align="center">{{$produks->model}}</td>
                    <td align="center">{{$produks->deskripsi}}</td>
                    <td align="center">{{$produks->garansi}}</td>
                    <!-- <td align="center">
                        <img src = {{$produks->gambar}}></img>
                    </td> -->
                    <td align="center">{{$produks->harga}}</td>
                    <td align="center">{{$produks->stock}}</td>
                    <td align="center">{{$produks->terjual}}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>

<div>
        <table class="table">
                
        </table>
    </div>
@endsection
