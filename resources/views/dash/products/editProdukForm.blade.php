@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>Edit Produk</h2></div>

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

    <form enctype="multipart/form-data" action="{{ url('updateproduk/'.$produk->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="pt-4">
            <div class="col-md-6 pt-3">
                <label for="inputEmail4">ID</label>
                <input type="number" id= "disabledInput" class="form-control" name="produkId" value = "{{$produk->id}}">
            </div>
            <div class="col-md-6">
                <label>Category</label>
                <select name="kategoriId" class="form-control" value = "{{$produk->kategoriName}}">
                    @foreach($kategori as $categories)
                        <option value="{{$categories->id}}">{{$categories->kategoriName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 pt-3">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="produkName" value = "{{$produk->produkName}}">
            </div>
            <div class="col-md-6 pt-3">
                <label for="inputEmail4">Brand</label>
                <input type="text" class="form-control" name="brand" value = "{{$produk->brand}}">
            </div>
            <div class="col-md-6 pt-3">
                <label for="inputEmail4">Model</label>
                <input type="text" class="form-control" name="model" value = "{{$produk->model}}">
            </div>
            <div class="col-md-6 pt-3">
                <label for="inputEmail4">Description</label>
                <input type="text" class="form-control" name="deskripsi" value = "{{$produk->deskripsi}}">
            </div>
            <div class="col-md-6 pt-3">
                <label for="inputEmail4">Garansi</label>
                <input type="text" class="form-control" name="garansi" value = "{{$produk->garansi}}">
            </div>
            <div class="col-md-6 pt-3">
                <label for="inputEmail4">Image</label><br>
                <img src = "/frontend/image/upload/produk/{{$produk->image}}" width="120px"></img>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="col-md-6 pt-3">
                <label for="inputPassword4">Harga</label>
                <input type="number" class="form-control" name="harga" value = "{{$produk->harga}}">
            </div>
            <div class="col-md-6 pt-3">
                <label for="inputPassword4">Stock</label>
                <input type="number" class="form-control" name="stock" value = "{{$produk->stock}}">
            </div>
            <div class="col-md-6 pt-3">
                <label for="inputPassword4">Terjual</label>
                <input type="number" class="form-control" name="terjual" value = "{{$produk->terjual}}">
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-4" onsubmit = "return confirm('Are you sure?')">Edit</button>
    </form>
@endsection