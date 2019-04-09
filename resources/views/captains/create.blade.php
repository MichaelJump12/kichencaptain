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
        <h1>Create a new Kitchen Captain</h1>
    </div>
    <div class="createCaptainContainer">

        <form method="POST" action="/captains">
            @csrf
            <div class="form-container">
                <div class="form-block">
                    <label> First Name </label>
                </div>
                <div class="form-input">
                    <input id="first_name" name="first_name" required type="text">
                </div>
            </div>

            <div class="form-container">
                <div class="form-block">
                    <label> Last Name </label>
                </div>
                <div class="form-input">
                    <input id="last_name" name="last_name" required type="text">
                </div>
            </div>

            <div class="form-container">
                <div class="form-block">
                    <label> Nickname </label>
                </div>
                <div class="form-input">
                    <input id="nickname" name="nickname" required type="text">
                </div>
            </div>
            <div class="form-container">
                <div class="form-block">
                    <label> Your Captain colour </label>
                </div>
                <div class="form-input">
                    <input type="color" name="colour" value="#E66465" required>
                </div>
            </div>

            <button class="submitCaptain" type="submit">
                make Captain
            </button>
            <h5> already a captain <a href="/captains"> click here </a> </h5>

        </form>

    </div>
</body>

</html>