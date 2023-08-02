<!DOCTYPE html>
<html>
<head>
    <title>NgeKost Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> --}}
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;0,800;0,900;1,400&display=swap');
body {
    margin: 0px;
    padding: 0px;
    font-family: 'Poppins', sans-serif;
    background-color: beige;
}
.wrapper {
    width: 1100px;
    margin: auto;
    position: relative;
}
.logo a{
    font-size: 50px;
    font-weight: 800;
    float: left;
    font-family: "Poppins", sans-serif;
    color: beige;
    text-decoration: none;
}

.menu {
    float: right;
}

nav {
    width: 100%;
    margin: auto;
    display: flex;
    line-height: 80px;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    background-color: #35A29F;
    z-index: 1;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    /* overflow: hidden; */
}

nav ul li {
    float: left;
}
nav ul li a {
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 0px 16px 0px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}
a.tbl-biru {
    background: #2E4F4F;
    border-radius: 20px;
    margin-top: 20px;
    margin-right: 10px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
}
a.tbl-biru:hover {
    background: black;
    text-decoration: none;
}

a.tbl-pink {
    background: #35A29F;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
    text-decoration: none;
}
</style>
    {{-- NAVBAR --}}
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=""style="font-size: 30px; color:beige; text-transform:uppercase; letter-spacing: 7px;" href="#"><i class='bx bx-home-heart'></i>NgeKost!</a></div>
            <div class="menu">
                <ul>
                    {{-- <li><a href="{{ route('profile')}}" class="tbl-biru">Contact Us</a></li> --}}
                    <li><a href="{{ route('home')}}" class="tbl-biru">Back to Home</a></li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{-- {{ Auth::user()->name }} --}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <p class="dropdown-item"  width="20px !important" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </p>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- END NAVBAR --}}
<div class="container">
    <style>
        .dropdown .dropdown-menu{
            padding:10px;
            top:10px !important;
            width:350px !important;
            left:-110px !important;
            /* box-shadow:0px 5px 30px rgb(131, 64, 25); */
}
    </style>
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
@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
