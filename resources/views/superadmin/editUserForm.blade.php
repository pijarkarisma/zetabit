@extends('superadmin.dashboard')

@section('konten-superadmin')
    <div><h2>Edit User</h2></div>

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

    <form action="{{url('updateuser/'.$user->id)}}" method="POST">
        @method('put')
        @csrf
        <div class="form-row pt-4">
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="name" value = "{{$user->name}}">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Email</label>
                <input type="text" class="form-control" name="email" value = "{{$user->email}}">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Phone Number</label>
                <input type="text" class="form-control" name="phoneNumber" value = "{{$user->phonenumber}}">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Address</label>
                <input type="text" class="form-control" name="address" value = "{{$user->address}}">
            </div>
            <div class="form-group col-md-6 pt-3">
                <label for="inputEmail4">Level</label>
                <input type="text" class="form-control" name="level" value = "{{$user->level}}">
            </div>            
        </div>

        <button type="submit" class="btn btn-success mt-4">Edit</button>
    </form>
@endsection