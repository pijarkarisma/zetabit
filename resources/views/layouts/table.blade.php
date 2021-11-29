<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> ZETABIT | Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap core CSS -->
     <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Processor</h1>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Tambah Produk Baru</button>
                </div>
                <br>
                @yield('konten')
            </div>
        </div>
    </div>    
</body>
</html>