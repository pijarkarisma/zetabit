@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>All Processor</h2></div>

    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
                <th>No</th>
                <th>ID</th>
                <th>Tipe Processor</th>
                <th>Arsitektur</th>
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