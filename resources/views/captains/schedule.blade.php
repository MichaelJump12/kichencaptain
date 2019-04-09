<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
    <div class="jumbotron">
        <h1>scheduling of current captains</h1>
    </div>
    <div class="scheduleCaptainContainer">

        <form method="POST" action="/schedule">
            @csrf
            <select name="captain_id">
                @foreach($captains as $captain)
                <option value={{ $captain->id }}>
                    {{ $captain->first_name }}
                    {{ $captain->last_name }}
                </option>
                @endforeach
            </select>

            <input type='date' name="week_start" id="datepicker" <?php strtotime("last Monday") ?> />
            <button class="submitCaptain" type="submit">
                set date
            </button>
            <h5> want to see the captains? <a href="/captains"> click here </a> </h5>
        </form>
        

        <div class="containerBlock">
            <div class="calenderContent">
                <div id="content">
                    <div class="buttons" id="container">
                        <button class="btn button-style" id="previous">&lt;&lt; Previous</button>
                        <button class="btn button-style" id="next">Next &gt;&gt;</button>
                    </div>
                </div>
            </div>
            <div class="captainColours">

            @foreach($schedules as $schedule)
            <h5>
                Captain name:
                {{ $schedule->captain->fullname() }}
                <br>
            </h5>
            <h5 style="background-color: {{$schedule->captain->colour }}" 
                data-schedule-for="{{ $schedule->captain->id }}"
                data-schedule-day="{{ $schedule->week_start->format('j') }}"
                data-schedule-month="{{ $schedule->week_start->format('m') }}"
                data-schedule-year="{{ $schedule->week_start->format('Y') }}">
                week they are captain:
                <br>{{$schedule->week_start}} </h6>

            <br>
            @endforeach

        </div>
        </div>


        <script type="text/javascript">
        var schedules = {
            !!$schedules - > toJson() !!
        };
        </script>
        <script src="{{ asset('js/app.js') }}"></script>

</html>