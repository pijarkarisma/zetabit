@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>Add Processor</h2></div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Bean</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
                <th>No</th>
                <th>ID</th>
                <th>Tipe Processor</th>
                <th>Gen</th>
                <th>Deskripsi</th>
                <?php $no = 0 ?>
            </thead>
            <tbody>
            @foreach($processors as $processor)
                <tr>
                    <td align="center">{{++$no}}</td>
                    <td align="center">{{$processor->produkId}}</td>
                    <td align="center">{{$processor->tipe}}</td>
                    <td align="center">{{$processor->gen}}</td>
                    <td align="center">{{$processor->deskripsi}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection