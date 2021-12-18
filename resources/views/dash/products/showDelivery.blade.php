@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
    <table class="table">
        <thead align="center">
            <tr>
                <th scope="row">ID</th>
                <th scope="col">Company</th>
                <th scope="col">Courier Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($delivery as $deliveries)
            <tr>
                <th scope="row">{{$deliveries->id}}</th>
                <td align="center">{{$deliveries->company}}</td>
                <td align="center">{{$deliveries->courier_name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
