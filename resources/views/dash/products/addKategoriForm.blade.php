@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>Add Produk</h2></div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <form action="{{route('addkategori')}}" method="POST">
        @csrf
        <div class="form-row pt-4">
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">ID</label>
                <input type="number" class="form-control" name="kategoriId">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Category Name</label>
                <input type="text" class="form-control" name="kategoriName">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add</button>
    </form>
@endsection