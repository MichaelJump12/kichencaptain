<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body style="background-color:white">
    <nav>
        <div class="col s12">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo" style="padding-left: 20px">Login!</a>
    </nav>
    <div class="createCaptainContainer">
        <div class="card" style=" padding:8px; margin-top:20px">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-container">
                    <div class="form-block">
                        <label style="font-size: 20px; color:black;"> First Name </label>
                    </div>
                    <div class="form-input">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-container">
                    <div class="form-block">
                        <label style="font-size: 20px; color:black;"> Email </label>
                    </div>
                    <div class="form-input">
                        <input id="email" type="email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-container">
                    <div class="form-block">
                        <label style="font-size: 20px; color:black;"> password </label>
                    </div>
                    <div class="form-input">
                        <input id="password" type="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-container">
                    <div class="form-block">
                        <label for="password-confirm" style="font-size: 20px; color:black;" class="col-md-4 col-form-label text-md-right">Confirm
                            Password</label>
                    </div>
                    <div class="form-input">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required>
                    </div>
                </div>



                <br>
                <center>
                    <button class="btn waves-effect waves-light" type="submit">Register
                        <i class="material-icons right">send</i>
                    </button>
                    </form>
                    <br>
                    <a style="font-size: 20px" href="/login">Already have an account? Click here</a></li>
                </center>
        </div>
    </div>
</body>

</html>

