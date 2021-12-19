@extends('dash.dashboard')

@section('konten-produk-admin')
    <div><h2>Add Supplier</h2></div>

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

    <form action="{{route('addsupplier')}}" method="POST">
        @csrf
        <div class="form-row pt-4">
            <div class="form-group col-md-6 pt-3">
                <label for="inputPassword4">ID</label>
                <input type="number" class="form-control" name="supplierId">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Company</label>
                <input type="text" class="form-control" name="supplierCompany">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Address</label>
                <input type="text" class="form-control" name="supplierAddress">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Phone Number</label>
                <input type="text" class="form-control" name="supplierPhoneNum">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Email</label>
                <input type="text" class="form-control" name="supplierEmail">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add</button>
    </form>
@endsection