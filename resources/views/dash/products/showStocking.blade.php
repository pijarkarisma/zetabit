@extends('dash.dashboard')

@section('konten-produk-admin')
<div><h2>All Stocks</h2></div>
<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead align="center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Stock Date</th>
                <th scope="col">Product</th>
                <th scope="col">Supplier</th>
                <th scope="col">Employee</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <?php $no = 0 ?>
            </tr>
        </thead>
        <tbody align="center">
            @foreach($stocking as $stockings)
            <tr>
                <td align="center">{{++$no}}</td>
                <td align="center">{{$stockings->stockDate}}</td>
                <td align="center">{{$stockings->produkName}}</td>
                <td align="center">{{$stockings->company}}</td>
                <td align="center">{{$stockings->name}}</td>
                <td align="center">{{$stockings->quantity}}</td>
                <td align="center">{{$stockings->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
