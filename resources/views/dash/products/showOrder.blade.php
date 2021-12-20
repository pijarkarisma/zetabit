@extends('dash.dashboard')

@section('konten-produk-admin')
<div><h2>All Orders</h2></div>
<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead align="center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Order Date</th>
                <th scope="col">Customer</th>
                <?php $no = 0 ?>
            </tr>
        </thead>
        <tbody align="center">
            @foreach($order as $orders)
            <tr>
                <td align="center">{{++$no}}</td>
                <td align="center">{{$orders->orderDate}}</td>
                <td align="center">{{$orders->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
