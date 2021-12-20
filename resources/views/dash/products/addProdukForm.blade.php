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

    <form action="{{route('addproduk')}}" method="POST">
        @csrf
        <div class="form-row pt-4">
            <div class="form-group col-md-6">
                <label>Category</label>
                <select name="kategoriId" class="form-control">
                    @foreach($kategori as $categories)
                        <option value="{{$categories->id}}">{{$categories->kategoriName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="produkName">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Brand</label>
                <input type="text" class="form-control" name="brand">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Model</label>
                <input type="text" class="form-control" name="model">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Description</label>
                <input type="text" class="form-control" name="deskripsi">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Garansi</label>
                <input type="text" class="form-control" name="deskripsi">
            </div>
            <!-- <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Image</label>
                <input type="text" class="form-control" name="deskripsi">
            </div> -->
            <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">Harga</label>
                <input type="number" class="form-control" name="harga">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">Stock</label>
                <input type="number" class="form-control" name="stock">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">Terjual</label>
                <input type="number" class="form-control" name="terjual">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add</button>
    </form>
@endsection