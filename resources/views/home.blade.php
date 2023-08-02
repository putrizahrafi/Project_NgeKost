<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kos Modern? Ya NgeKost!</title>
    {{-- @vite('resources/sass/app.scss') --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link rel="stylesheet" href="css/style1.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;0,800;0,900;1,400&display=swap');
*
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            /* background-color:#FFEECC; */
        }

.content{
            max-width: 650px;
            margin: 60px 100px;
        }

.content .info h2{
            color: #226A80;
            font-size: 55px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 2px;
            line-height: 60px;
            margin-bottom: 30px;
        }

.content .info h2 span{
            color: #BA704F;
            font-size: 50px;
            font-weight: 600;
        }

        .content .info-btn{
            color: #fff;
            background: #226A80;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: 0.3s;
            transition-property: background;
        }

.content .info-btn:hover{
            background: #0C4F60;
        }

.media-icons{
            display: flex;
            justify-content:center;
            align-items: center;
            margin: auto;
        }

.media-icons a{
            position: relative;
            color: #111;
            font-size: 25px;
            transition: 0.3s;
            transition-property: transform;
        }

.media-icons a:not(:last-child){
            margin-right: 60px;
        }

.media-icons a:hover{
            transform: scale(1.5);
        }
</style>
    <section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" style="font-size: 30px; color:black; text-transform:uppercase; letter-spacing: 7px;" href="#"><i class='bx bx-home-heart'></i>NgeKost!</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="nav justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('products')}}"><i class='bx bx-bed'></i>Kamar Kost</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route ('login')}}"><i class='bx bx-log-in-circle'></i>Login</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <img src="img/download (1).jpeg" width="1150" height="500">
        <div class="content">
            <div class="info">
                <h2>Hai!<br><span>Selamat Datang</span></h2>
                <p>NgeKost! menyediakan 3 kategori kamar yang nyaman untuk kamu. Yuk temukan kamar kos nyaman mu di mana akan menjadi rumah keduamu untuk memulai impian baru!</p>
                <a href="#" class="info-btn">More Info</a>
            </div>
            <div class="media-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://wa.me/6285602495727"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </section>
    {{-- NAVBAR --}}
    {{-- <nav>
        <div class="wrapper">
            <div class="logo"><a href="">Home!</a></div>
            <div class="menu">
                <ul>
                    <li><a href="{{ route('profile')}}" class="tbl-biru">Contact Us</a></li>
                </ul>
            </div>
    </nav> --}}
    {{-- END NAVBAR --}}
    {{-- ISI --}}
    {{-- <div class="wrapper">
        <section id="home">
            <img src="https://img.freepik.com/free-vector/tiny-house-concept-illustration_114360-9087.jpg?w=740&t=st=1690466618~exp=1690467218~hmac=9bc635003c7bcf156fe7ac1d60a8c8e96bfac17d043fe5b7dce55a3061490e0d" width="550px" height="550px"/>
            <div class="kolom" style="margin: 50px;">
                <h2 class="deskripsi">Welcome to NgeKost!</h2>
                <p>Selamat datang di NgeKost! - Temukan kamar kos nyaman mu di mana akan menjadi rumah keduamu untuk memulai impian baru!</p>
                <p><a href="{{ route('products') }}" class="tbl-pink">Lihat Kostan</a></p>
            </div>
        </section>
    </div> --}}
    {{-- Akhir ISI --}}
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
