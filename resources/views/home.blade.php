<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
</head>
<body>
    {{-- NAVBAR --}}
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">NgeKost!</a></div>
            <div class="menu">
                <ul>
                    <li><a href="{{ route('profile')}}" class="tbl-biru">Contact Us</a></li>
                </ul>
            </div>
    </nav>
    {{-- END NAVBAR --}}
    {{-- ISI --}}
    <div class="wrapper">
        <section id="home">
            <img src="https://img.freepik.com/free-vector/storehouse-workers-keeping-records-boxes_74855-11065.jpg?w=740&t=st=1685776143~exp=1685776743~hmac=cd9c99eb34d02d66a7af658a4af3413aa374fc5111051aebefd678dbf3dd5da0"/>
            <div class="kolom">
                <h2 class="deskripsi">Welcome to NgeKost!</h2>
                <p>Halo, perkenalkan nama saya Putri Zahrafi Anam yang kerap disapa Puput. Saya lahir di Surabaya, 5 Agustus 2003. Saat ini saya sedang mengenyam pendidikan S1 di IT Telkom Surabaya Jurusan Sistem Informasi. Saya anak kedua dari 2 bersaudara. Hobi saya adalah Menonton Youtube, Rebahan, dan Membaca Buku.</p>
                <p><a href="{{ route('barang.index') }}" class="tbl-pink">Lihat Kostan</a></p>
            </div>
        </section>
    </div>
    {{-- Akhir ISI --}}
    @vite('resources/js/app.js')
</body>
</html>
