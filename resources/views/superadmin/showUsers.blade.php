@extends('superadmin.dashboard')

@section('konten-superadmin')
<div><h2>All Users</h2></div>
<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead align="center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Level</th>
                <th colspan=2>Action</th>
                <?php $no = 0 ?>
            </tr>
        </thead>
        <tbody align="center">
            @foreach($user as $users)
            <tr>
                <th align="center">{{++$no}}</th>
                <td align="center">{{$users->name}}</td>
                <td align="center">{{$users->email}}</td>
                <td align="center">{{$users->phonenumber}}</td>
                <td align="center">{{$users->address}}</td>
                <td align="center">{{$users->level}}</td>
                <td align="center">
                    <a href="{{ url('edituser/'.$users->id) }}">
                        <button type="button" class="btn btn-success">Edit</button>
                    </a>
                </td>
                <td align="center">
                    <form action="{{ url('destroyuser/'.$users->id) }}" method="post" onsubmit="return confirm('Are you sure?')">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection