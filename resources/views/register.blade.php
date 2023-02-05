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
    <form class="box" method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
        {{csrf_field()}}
        <div class="header">
            <br>
            <br>
            <br>
        </div>
        <div class="login-area">
            <input type="text" class="username" id="name" name="name" placeholder="Username" required />
            <input type="email" class="username" id="email" name="email" placeholder="email" required />
            <input type="password" class="password" id="password" name="password" placeholder="Password" required />
            <button class="submit">Register</button>
            <a href="/">login</a>
            <a href="#">Forgot Password?</a>
        </div>
    </form>
</body>

</html>