@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>Edit Stock</h2></div>

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

    <form action="{{ url('updatestock/'.$stocking->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row pt-4">
            <div class="form-group col-md-6">
                <label>Product</label>
                <select name="productId" class="form-control" value= "{{$stocking->produkName}}">
                    @foreach($produk as $products)
                        <option value="{{$products->id}}">{{$products->produkName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Supplier</label>
                <select name="supplierId" class="form-control" value= "{{$stocking->company}}">
                    @foreach($supplier as $suppliers)
                        <option value="{{$suppliers->id}}">{{$suppliers->company}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Employee</label>
                <select name="userId" class="form-control" value="{{$stocking->name}}">
                    @foreach($user as $users)
                        <option value="{{$users->id}}">{{$users->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Quantity</label>
                <input type="text" class="form-control" name="quantity" value = "{{$stocking->quantity}}">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Price</label>
                <input type="text" class="form-control" name="price" value = "{{$stocking->price}}">
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-4">Edit</button>
    </form>
@endsection