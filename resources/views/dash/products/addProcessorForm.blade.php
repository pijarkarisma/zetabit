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
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>ID Produk</label>
                <select name="produkId" class="form-control">
                    @foreach($produks as $produk)
                        <option value="{{$produk->id}}">{{$produk->manufaktur}}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="form-group col-md-6">
                <label for="inputEmail4">ID Produk</label>
                <input type="number" class="form-control" name="produkId">
            </div> --}}
            <div class="form-group col-md-6">
                <label for="inputPassword4">Tipe Processor</label>
                <input type="text" class="form-control" name="tipe">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Gen</label>
                <input type="text" class="form-control" name="gen">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add</button>
    </form>
@endsection