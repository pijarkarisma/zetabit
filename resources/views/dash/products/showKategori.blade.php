@extends('dash.dashboard')

@section('konten-produk-admin')
<div>
    <table class="table">
        <thead align="center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <?php $no = 0 ?>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $categories)
            <tr>
                <th align="center">{{++$no}}</th>
                <td align="center">{{$categories->kategoriName}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
