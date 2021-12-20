@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>All User's Wishlists</h2></div>

    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
                <th scope="col">No</th>
                <th scope="col">Product</th>
                <th scope="col">Customer</th>
                <?php $no = 0 ?>
            </thead>
            <tbody align="center">
            @foreach($wishlist as $wishlists)
                <tr>
                    <td align="center">{{++$no}}</td>
                    <td align="center">{{$wishlists->produkName}}</td>
                    <td align="center">{{$wishlists->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection