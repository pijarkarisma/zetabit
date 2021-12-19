@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
    <table class="table">
        <thead align="center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Order Date</th>
                <th scope="col">Employee</th>
                <?php $no = 0 ?>
            </tr>
        </thead>
        <tbody>
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
