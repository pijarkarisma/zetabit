@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
    <table class="table">
        <thead align="center">
            <tr>

                <th scope="row">Order ID</th>
                <th scope="col">Product ID</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <?php $no = 0 ?>
            </tr>
        </thead>
        <tbody>
            @foreach($order_details as $orderdetails)
            <tr>
                <td align="center">{{++$no}}</td>
                <th scope="row">{{$orderdetails->orderId}}</th>
                <td align="center">{{$orderdetails->productId}}</td>
                <td align="center">{{$orderdetails->quantity}}</td>
                <td align="center">{{$orderdetails->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
