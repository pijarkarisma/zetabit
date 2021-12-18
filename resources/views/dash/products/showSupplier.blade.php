@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>All Supplier</h2></div>

    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
                <th>ID</th>
                <th>Perusahaan</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <?php $no = 0 ?>
            </thead>
            <tbody>
            @foreach($processors as $processor)
                <tr>
                    <td align="center">{{++$no}}</td>
                    <td align="center">{{$suppliers->id}}</td>
                    <td align="center">{{suppliers->company}}</td>
                    <td align="center">{{$suppliers->email}}</td>
                    <td align="center">{{$suppliers->phoneNumber}}</td>
                    <td align="center">{{$suppliers->address}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection