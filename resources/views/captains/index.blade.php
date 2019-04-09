<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="jumbotron">

        <h1>List of kitchen captains</h1>
        <div style="text-align: left;"><a href="../home"> logout </a></div>
    </div>
    <div class="showCaptainContainer">

        <div class="allCaptains">
            @foreach($captains as $captain)
            <div class="captainBoxes">
                Captain name:
                <br>
                {{ $captain->fullname() }}

                @if ($captain->schedules)
                    @foreach($captain->schedules as $schedule) 
                        <h6 id="ScheduleJS" style="background-color: {{ $captain->colour }}"> week they are captain:
                        <br>{{ $schedule->week_start }} </h6>         
                    @endforeach
                @endif

            </div>

            @endforeach
      
        </div>
        <hr>  




        <!-- {{ $captains->random()->first_name }} -->
      
        
        </div>
        <center>
            <a href="/captains/create">Click to create a new Kitchen Captain!</a> <br>
            <a href="/schedule"> see the captains schedule </a>
        </center>
        @if ($errors->has('schedule'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('schedule') }}</strong>
        </span>
        @endif


    </div>
</body>

</html>