@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
    <table class="table">
        <thead align="center">
            <tr>
                <th scope="row">ID</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $categories)
            <tr>
                <th scope="row">{{$categories->id}}</th>
                <td align="center">{{$categories->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
