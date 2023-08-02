<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <section>
        <input type="checkbox" id="check">
        <header>
            <h2> <a href="#" class="logo">NgeKost!</a></h2>
            <div class="navigation">
                {{-- <a href="#home">Home</a> --}}
                {{-- <a href="{{route('products')}}">Kamar Kost</a> --}}
            </div>
            <label for="check">
                <i class="fas fa-bars menu-btn"></i>
                <i class="fas fa-times close-btn"></i>
            </label>
        </header>
        <div class="content">
            <div class="info">
                <h2>Hai!<br><span>Thank You</span></h2>
                <p>Kamu sudah mendapatkan kos impianmu, jadi untuk selanjutnya silahkan isi data dirimu melalui laman berikut ya!</p>
                <a href="{{ route('employees.index')}}" class="info-btn">Klik!</a>
                {{-- <a href="https://wa.me/6285602495727" class="info-btn">Klik!</a> --}}
            </div>
            {{-- <div class="media-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div> --}}
    </section>

</body>
</html>
