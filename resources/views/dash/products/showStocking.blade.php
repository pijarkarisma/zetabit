@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
    <table class="table">
        <thead align="center">
            <tr>
                <th scope="row">ID</th>
                <th scope="col">Stock Date</th>
                <th scope="col">Product ID</th>
                <th scope="col">Supplier ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stocking as $stockings)
            <tr>
                <th scope="row">{{$stockings->id}}</th>
                <td align="center">{{$stockings->stockDate}}</td>
                <td align="center">{{$stockings->productId}}</td>
                <td align="center">{{$stockings->supplierId}}</td>
                <td align="center">{{$stockings->userId}}</td>
                <td align="center">{{$stockings->quantity}}</td>
                <td align="center">{{$stockings->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
