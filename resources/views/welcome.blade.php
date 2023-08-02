<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kos Modern? Ya NgeKost!</title>
    <link rel="stylesheet" href="{{ asset('css/stylewelcome.css')}}">
    {{-- @vite('resources/sass/app.scss') --}}
</head>
<body>
{{-- <div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning">
    <div class="container text-center my-5">
        <h1 class="mb-4" style="color: #884A39; font-size: 70px; font-family: 'Cormorant Garamond';">NgeKost</h1> --}}
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        {{-- <img class="img-thumbnail" src="{{ Vite::asset('resources/images/Screenshot_20230601-121920_CapCut.png') }}" alt="image">

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-outline-dark btn-lg" href="{{ url('/home') }}">Go To Home</a>
            </div>
        </div>
    </div> --}}
{{-- </div> --}}
<section>
    <div class="swiper-container">
        <div>
            <!--========== ISLANDS 1 ==========-->
            <section class="islands">
                <img
                    src="{{ asset('img/Bett Norris Illustration.jpeg') }}"
                    alt=""
                    class="islands__bg"
                />
                <div class="bg__overlay">
                    <div class="islands__container container">
                        <div
                            class="islands__data"
                            style="z-index: 99; position: relative"
                        >
                            <h2 class="islands__subtitle">
                                Welcome to
                            </h2>
                            <h1 class="islands__title">
                                NgeKost!
                            </h1>
                            <p class="islands__description">

                            </p><br />
                            <a href="{{route ('home')}}" class="info-btn">Go to home!</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
    @vite('resources/js/app.js')
</body>
</html>
