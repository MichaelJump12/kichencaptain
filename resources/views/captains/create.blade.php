@extends ('../layouts/layout')


@section ('pageTitle')
Create a new captain
@endsection



@section ('content')
    <div class="createCaptainContainer">
        <div class="card" style=" padding:8px; margin-top:20px">
            <form method="POST" action="/captains">
                @csrf

                <div class="form-container">
                    <div class="form-block">
                        <label style = "font-size:1.5vw;  color:black;"> First Name </label>
                    </div>
                    <div class="form-input">
                        <input id="first_name" name="first_name" required type="text">
                    </div>
                </div>

                <div class="form-container">
                    <div class="form-block">
                        <label style = "font-size:1.5vw;  color:black;"> Last Name </label>
                    </div>
                    <div class="form-input">
                        <input id="last_name" name="last_name" required type="text">
                    </div>
                </div>

                <div class="form-container">
                    <div class="form-block">
                        <label style = "font-size:1.5vw; color:black;"> Nickname </label>
                    </div>
                    <div class="form-input">
                        <input id="nickname" name="nickname" required type="text">
                    </div>
                </div>
                <div class="form-container">
                    <div class="form-block" style=margin-top:20px>
                        <label style = "font-size:1.5vw; color:black;"> Your Captain colour </label>
                    </div>
                    <div class="form-input">
                        <input type="color" name="colour" value="#E66465" required>
                    </div>
                </div>

                <button class="allButtons submitCaptain allButtons btn waves-effect waves-light" type="submit">
                    make Captain <i class="material-icons right">send</i>
                </button>
        </div>

        </form>

    </div>
    <script src="./path-to-js/mm-fontsize.js" type="text/javascript"></script>
@endsection