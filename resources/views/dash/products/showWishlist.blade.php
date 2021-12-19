@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>All Wishlist</h2></div>

    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
                <th scope="col">No</th>
                <th scope="col">Company</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <?php $no = 0 ?>
            </thead>
            <tbody>
            @foreach($supplier as $suppliers)
                <tr>
                    <td align="center">{{++$no}}</td>
                    <td align="center">{{$suppliers->company}}</td>
                    <td align="center">{{$suppliers->email}}</td>
                    <td align="center">{{$suppliers->phoneNumber}}</td>
                    <td align="center">{{$suppliers->address}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection