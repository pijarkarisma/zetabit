@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>Add Stock</h2></div>

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

    <form action="{{route('addstocking')}}" method="POST">
        @csrf
        <div class="form-row pt-4">
            <div class="form-group col-md-6">
                <label>Product</label>
                <select name="productId" class="form-control">
                    @foreach($produk as $products)
                        <option value="{{$products->id}}">{{$products->produkName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Supplier</label>
                <select name="supplierId" class="form-control">
                    @foreach($supplier as $suppliers)
                        <option value="{{$suppliers->id}}">{{$suppliers->company}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Employee</label>
                <select name="userId" class="form-control">
                    @foreach($user as $users)
                        <option value="{{$users->id}}">{{$users->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Quantity</label>
                <input type="text" class="form-control" name="quantity">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Add</button>
    </form>
@endsection