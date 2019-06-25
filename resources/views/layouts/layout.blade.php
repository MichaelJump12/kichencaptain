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
                <a href="#" class="brand-logo" style="font-size:2.7vw; padding-left: 20px">@yield('pageTitle')</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li class="navWidth {{ Request::path() == 'captains' ? 'active' : '' }}"><a href="/captains">Show the
                            captains</a></li>
                    <li class="navWidth {{ Request::path() == 'captains/create' ? 'active' : '' }}"><a
                            href="/captains/create">Create a captain</a></li>
                    <li class="navWidth {{ Request::path() == 'schedule' ? 'active' : '' }}"><a href="/schedule">Captain
                            schedules</a></li>
                    
                    <li class = "navWidth" ><form action="{{ route('logout') }}" method="post">
                    @csrf
                            <button div class="logoutHover">Logout</button>
                    </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield ('content')
</body>

<script src="{{ asset('js/app.js') }}"></script>

</html>