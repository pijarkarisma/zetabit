@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
    <table class="table">
        <thead align="center">
            <tr>
                <th scope="row">ID</th>
                <th scope="col">Order Date</th>
                <th scope="col">User Id</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $orders)
            <tr>
                <th scope="row">{{$orders->id}}</th>
                <td align="center">{{$orders->orderDate}}</td>
                <td align="center">{{$orders->userId}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
