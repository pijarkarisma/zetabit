@extends('dash.dashboard')

@section('konten-produk-admin')
<div><h2>All Order Details</h2></div>
<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead align="center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Order ID</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <?php $no = 0 ?>
            </tr>
        </thead>
        <tbody align="center">
            @foreach($order_details as $orderdetails)
            <tr>
                <td align="center">{{++$no}}</td>
                <td align="center">{{$orderdetails->orderId}}</td>
                <td align="center">{{$orderdetails->productName}}</td>
                <td align="center">{{$orderdetails->quantity}}</td>
                <td align="center">{{$orderdetails->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
