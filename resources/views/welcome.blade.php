<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS : MINI PROJECT >> Master Barang</title>
    @vite('resources/sass/app.scss')
</head>
<body>
<div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning">
    <div class="container text-center my-5">
        <h1 class="mb-4" style="color: #884A39; font-size: 70px; font-family: 'Cormorant Garamond';">UTS : MINI PROJECT</h1>
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/Screenshot_20230601-121920_CapCut.png') }}" alt="image">

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-outline-dark btn-lg" href="{{ url('/home') }}">Home</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</div>
</body>
</html>
