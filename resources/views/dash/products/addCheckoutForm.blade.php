@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>Add Processor</h2></div>

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

    <form action="{{route('addprocessor')}}" method="POST">
        @csrf
        <div class="form-row pt-4">
            {{-- <div class="form-group col-md-6">
                <label>Brand</label>
                <select name="produkId" class="form-control">
                    @foreach($produks as $produk)
                        <option value="{{$produk->id}}">{{$produk->manufaktur}}</option>
                    @endforeach
                </select>
            </div> --}}
            {{-- <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Brand</label>
                <input type="number" class="form-control" name="produkId">
            </div> --}}
            <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">ID Kategori</label>
                <input type="number" class="form-control" name="kategoriid">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">Brand</label>
                <input type="text" class="form-control" name="brand">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">Model</label>
                <input type="text" class="form-control" name="model">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi">
            </div>
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
            {{-- <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">Model Processor</label>
                <input type="text" class="form-control" name="tipe">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">Generasi</label>
                <input type="text" class="form-control" name="gen">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi">
            </div> --}}
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add</button>
    </form>
@endsection