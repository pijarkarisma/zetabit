@extends('layouts.app')

@section('konten')
<br></br>
<div class = "container-fluid bg-gray">
<div class = "container bg-light">
    <form class="row g-3">
        <label for = "" style = "font-size:18px"><b>INFORMASI PRIBADI</b></label>
        <hr class="my-2">
        <div class="col-md-4">
            <label for="inputFirstName" class="form-label">Nama Depan<span style = "color:red">*</span></label>
            <input type="firstname" class="form-control" id="inputFirstName">
        </div>
        <div class="col-md-4">
            <label for="inputMiddleName" class="form-label">Nama Tengah</label>
            <input type="middlename" class="form-control" id="inputMiddleName">
        </div>
        <div class="col-md-4">
            <label for="inputLastName" class="form-label">Nama Belakang</label>
            <input type="lastname" class="form-control" id="inputLastName">
        </div>
        <label for = "" style = "font-size:18px"><b>INFORMASI TEMPAT TINGGAL</b></label>
        <hr class="my-2">
        <div class="col-12">
            <label for="inputAddress" class="form-label">Alamat<span style = "color:red">*</span></label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Alamat 1">
        </div>
        <div class="col-12">
            <input type="text" class="form-control" id="inputAddress2" placeholder="Alamat 2">
        </div>
        <div class="col-12">
            <input type="text" class="form-control" id="inputAddress3" placeholder="Alamat 3">
        </div>
        <div class="col-md-3">
            <label for="inputState" class="form-label">Negara<span style = "color:red">*</span></label>
            <select id="inputState" class="form-select">
                <option selected>Indonesia</option>
                <option>United States of America</option>
                <option>United Kingdom</option>
                <option>China</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="inputProv" class="form-label">Provinsi<span style = "color:red">*</span></label>
            <input type="text" class="form-control" id="inputProv">
        </div>
        <div class="col-md-3">
            <label for="inputCity" class="form-label">Kota<span style = "color:red">*</span></label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-3">
            <label for="inputZip" class="form-label">Kode Pos<span style = "color:red">*</span></label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <label for = "" style = "font-size:18px"><b>INFORMASI SIGN-IN</b></label>
        <hr class="my-2">
        <div class="col-12">
            <label for="inputEmail" class="form-label">Alamat Email<span style = "color:red">*</span></label>
            <input type="email" class="form-control" id="inputEmail" placeholder="nama@domain.com">
        </div>
        <div class = "col-md-2">
        <label><b> Daftar sebagai: </b><span style = "color:red">*</span></label>
        </div>
        <div class = "col-md-1">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">User</label>
        </div>
        </div>
        <div class = "col-md-1">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Admin</label>
        </div>
        </div>
        
        <div class="col-12">
            <label for="inputPassword" class="form-label">Password<span style = "color:red">*</span></label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="col-12">
            <label for="inputConfirmPassword" class="form-label">Masukkan kembali password<span style = "color:red">*</span></label>
            <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Daftar untuk Newsletter
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Daftar</button>
            <button type="submit" class="btn btn-danger">Masuk dengan Google</button>
            <button type="submit" class="btn btn-primary">Masuk dengan Facebook</button>
        </div>
    </form>
</div>
</div>
<br></br>
@endsection