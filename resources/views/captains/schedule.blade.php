@extends ('../layouts/layout')


@section ('pageTitle')
Scheduling of current captains
@endsection




@section ('content')

@if ($errors->any())
<div class="alert alert-danger" style="margin-left: 10.5%;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="scheduleCaptainContainer">

    <form method="POST" action="/schedule">
        @csrf
        <select name="captain_id" style="display:block; margin-left: -4px;">
            @foreach($captains as $captain)
            <option value={{ $captain->id }}>
                {{ $captain->first_name }}
                {{ $captain->last_name }}
            </option>
            @endforeach
        </select>

        <div class="row">
            <input type='date' name="week_start" id="datepicker" <?php strtotime("last Monday") ?> />
        </div>
        <button class="allButtons btn waves-effect waves-light" type="submit" name="action"
            style="line-height: 10px;">Submit
            Date
            <i class="material-icons right">send</i>
        </button>
        <br>
        <br>
    </form>

    <div class="c-Calendar__block">
        <div class="c-Calendar__container">
            <div class="calenderContent">
                <div class="card" style="height: 475px; padding: 10px 0 0 10px; width:100%;">
                    <div id="content">
                        <div class="buttons" id="container">
                            <button class="btn button-style" id="previous">&lt;&lt; Previous</button>
                            <button class="btn button-style" id="next">Next &gt;&gt;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-Calendar__blockKey">

            <ul class="collection" style="padding-left: inherit;">
                @foreach($captains as $captain)

                <div class="captainBoxes" style="padding-bottom: 6px;">
                    Captain name:
                    <br>
                    {{ $captain->fullname() }}
                    @if ($captain->schedules)
                    @foreach($captain->upcomingSchedules() as $schedule)
                    <li class="collection-item"
                        style="background-color: {{$schedule->captain->colour }}; color: white; height: 44px; margin-right: 9px;"
                        data-schedule-for="{{ $schedule->captain->id }}"
                        data-schedule-day="{{ $schedule->week_start->format('j') }}"
                        data-schedule-month="{{ $schedule->week_start->format('m') }}"
                        data-schedule-year="{{ $schedule->week_start->format('Y') }}">
                        <p style="margin-top: auto;">{{ $schedule->week_start }}</p>
                        @endforeach
                        @endif
                    </li>
                    @endforeach
                </div>
            </ul>

        </div>
    </div>

</div>







<script type="text/javascript">
var schedules = {
    !!$schedules - > toJson() !!
};
</script>
@endsection