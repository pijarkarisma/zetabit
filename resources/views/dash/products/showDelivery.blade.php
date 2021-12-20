@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
    <table class="table">
        <thead align="center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Company</th>
                <th scope="col">Courier Name</th>
                <?php $no = 0 ?>
                
            </tr>
        </thead>
        <tbody>
            @foreach($delivery as $deliveries)
            <tr>
                <td align="center">{{++$no}}</td>
                <td align="center">{{$deliveries->company}}</td>
                <td align="center">{{$deliveries->courier_name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
