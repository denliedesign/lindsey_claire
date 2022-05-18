@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-5">Events</h1>
        <p class="text-center">
            <a href="/images/calendar.pdf" target="_blank">View Our Full Calendar</a>
        </p>
        <div class="d-flex justify-content-center my-4">
            <a href="https://app.thestudiodirector.com/lindseyclairedancecomp/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Register</div></a>
        </div>
        <div class="row">
            <div class="col-sm">
                <img src="/images/summer-camps-2022.jpg" alt="summer camps" class="img-fluid">
            </div>
            <div class="col-sm">
                <img src="/images/summer-schedule-2022.png" alt="summer schedule" class="img-fluid">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm">
                <img src="/images/summer-info-2022.jpg" alt="summer info" class="img-fluid">
            </div>
            <div class="col-sm">
                <img src="/images/fall-registration.png" alt="fall registration" class="img-fluid">
            </div>
        </div>
    </div>

@endsection
