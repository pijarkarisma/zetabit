@extends('dash.dashboard')

@section('konten-produk-admin')
<div><h2>All Categories</h2></div>
<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead align="center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <?php $no = 0 ?>
            </tr>
        </thead>
        <tbody align="center">
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
