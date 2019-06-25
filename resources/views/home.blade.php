@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <li><a href="../login"> logout </a></li>
                <div class="card-body">
                   
                    <?php
                    session_unset();
                    Session::flush();
                    ?>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection