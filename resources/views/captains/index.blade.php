@extends ('../layouts/layout')


@section ('pageTitle')
All current captains
@endsection



@section ('content')

@if ($errors->any())
    <div class="alert alert-danger" style ="margin-left: 10.5%;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="showCaptainContainer">
        <br><br>
        <div class="allCaptains">
            @foreach($captains as $captain)
            <div class="card" style="width:49%; padding:8px;">
                <div class="captainBoxes">
                    Captain name:
                    <br>
                    {{ $captain->fullname() }}

                    @if ($captain->schedules)
                    @foreach($captain->schedules as $schedule)
                    <h5 id="ScheduleJS"
                        style="padding:2px; font-size:23px; font-weight: bold; margin:0px; background-color: {{ $captain->colour }}">
                        Week they are captain:</h5>
                    <h6 id="ScheduleJS"
                        style="margin: 0px; margin-bottom:3px; line-height: 61.9%; padding-bottom:8px; background-color: {{ $captain->colour }}">
                        <br>{{ $schedule->week_start }} </h6>
                    @endforeach
                    @endif
                </div>
            </div>

            @endforeach

        </div>
        <hr>




        <!-- {{ $captains->random()->first_name }} -->


    </div>
    <center>

    </center>
    @if ($errors->has('schedule'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('schedule') }}</strong>
    </span>
    @endif

@endsection