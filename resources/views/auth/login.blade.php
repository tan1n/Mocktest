<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">Sign In</h2>
        <!-- <h2 class="inactive underlineHover">Sign Up</h2> -->

        <!-- Icon -->

        <!-- Login Form -->
        <form action="{{route('login')}}" method="POST">
            @csrf
            <input
                    type="text"
                    id="login"
                    class="fadeIn second"
                    name="email"
                    placeholder="E-mail"
            />
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password"/>
            <input type="submit" class="fadeIn fourth" value="Log In" />
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Forgot Password?</a>
        </div>
    </div>
</div>
</body>
</html>