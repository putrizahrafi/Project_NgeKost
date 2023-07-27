<!DOCTYPE html>
<html>
<head>
    <title>NgeKost Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="#" class="navbar-brand mb-0 h1">NgeK<i class="bi-hexagon-fill me-2"></i>st</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="#" class="nav-link">Products</a></li>
                </ul>
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main -->
    <div class="bg-light mt-5" id="main">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-5 order-md-2">
                    <img class="img-fluid" src="{{asset('img/Shifting - Script Para Dr Naruto.jpeg')}}" alt="main logo">
                </div>
                <div class="col-md-7 order-md-1">
                    <h1 class="mt-4 display-3">Yuk, temukan kos mu dengan NgeKost!</h1>
                    <p class="fs-5 mt-3">Selamat Datang di NgeKost - Tempat Tepat untuk Memulai Petualangan Baru. Nikmati Serunya Hidup Kos Kosan dengan Fasilitas Terbaik di NgeKost!</p>
                    <div class="row">
                        <div class="d-flex flex-column flex-md-row">
                            <button type="button" class="btn bg-purple text-white btn-lg mb-3 me-md-3 px-4 py-3">Get Started</button>
                            <button type="button" class="btn btn-outline-dark btn-lg mb-3 px-4 py-3">Download</button>
                        </div>
                    </div>
                    <div class="text-muted">
                        Currently <strong>v5.3.0-alpha2.</strong> · <a href="#">v4.6.x docs</a> · <a href="#">All releases</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="dropdown">

                <button id="dLabel" type="button" class="btn btn-primary" data-bs-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
                </button>
                    <div class="dropdown-menu" aria-labelledby="dLabel">
                        <div class="row total-header-section">
                            @php $total = 0 @endphp
                            {{-- @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach --}}
                            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                <p>Total: <span class="text-success">$ {{ $total }}</span></p>
                            </div>
                        </div>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{ asset('img') }}/{{ $details['photo'] }}" />
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{ $details['product_name'] }}</p>
                                        <span class="price text-success"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br/>
<div class="container">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

@yield('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
