<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kasier DOTA</title>
    <link rel="stylesheet" href="indexcss/loginstyle.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="overlay"></div>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        Data Berhasil Di Inputkan
    </div>
    @endif
    @if(session('failed'))
    <div class="alert alert-danger" role="alert">
        Salah Memasukan Username Atau Password
    </div>
    @endif
    <form action="/login/masuk" method="post" class="box">
        {{csrf_field()}}
        <div class="header">
            <br>
            <br>
            <br>
        </div>
        <div class="login-area">
            <input type="text" class="username" id="name" name="name" placeholder="Username" />
            <input type="password" class="password" id="password" name="password" placeholder="Password" />
            <button class="submit">Register</button>
            <a href="#">Register</a>
            <a href="#">Forgot Password?</a>
        </div>
    </form>
</body>

</html>