@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
    <table class="table">
        <thead align="center">
            <tr>
                    <th scope="row">ID</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">Price</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Delivery ID</th>
                    <th scope="col">Delivery Mode</th>
                </tr>
        </thead>
        <tbody>
            @foreach($checkout as $checkouts)
            <tr>
                <th scope="row">{{$checkouts->id}}</th>
                <td align="center">{$checkouts->orderId}}</td>
                <td align="center">{{$checkouts->costSum}}</td>
                <td align="center">{{$checkouts->phoneNumber}}</td>
                <td align="center">{{$checkouts->paymentMethod}}</td>
                <td align="center">{{$checkouts->deliveryId}}</td>
                <td align="center">{{$checkouts->deliveryMode}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
