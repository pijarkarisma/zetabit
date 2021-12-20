@extends('dash.dashboard')

@section('konten-produk-admin')
<div><h2>All Processed Order</h2></div>
    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Price</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Payment Method</th>
                    <?php $no = 0 ?>
                </tr>
            </thead>
            <tbody align="center">
                @foreach($checkout as $checkouts)
                <tr>
                    <td align="center">{{++$no}}</td>
                    <td align="center">{$checkouts->orderId}}</td>
                    <td align="center">{$checkouts->name}}</td>
                    <td align="center">{{$checkouts->costSum}}</td>
                    <td align="center">{{$checkouts->phoneNumber}}</td>
                    <td align="center">{{$checkouts->paymentMethod}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
