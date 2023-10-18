<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppsInception</title>
    <link rel="shortcut icon" href="{{asset('assets/images/images.jpeg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
<div class="login">
    <div class="logoDiv text-center">
        <a href="./login.html"><img src="{{asset('assets/images/images.jpeg')}}" alt="Logo"></a>
        <h3>AppsInception</h3>
    </div>
    <form action="{{route('loginPost')}}" method="POST">
        @csrf
        <div class="emailDiv inputDivWidth">
            <label for="email">Email</label>
            <input name="email" type="email" placeholder="Type your email" id="email">
        </div>
        <div class="passwordDiv inputDivWidth">
            <label for="password">Password</label>
            <input name="password" type="password" placeholder="Type your password" id="password">
        </div>
        @if(session()->has('error'))
            <div class="passwordDiv inputDivWidth">
                {{session()->get('error')}}
            </div>
        @endif

        <div class="forgotDiv inputDivWidth">
            <button class="forget_btn"><a href="./reset.html">forget password</a></button>
        </div>

        <div class="logInDiv text-center inputDivWidth">
            <button class="login_btn">Log in</button>
        </div>
    </form>
    <div class="newUserDiv text-center inputDivWidth">
        <h3>New Here? <a href="./registration.html">Register!</a></h3>
    </div>
</div>
</body>
</html>
