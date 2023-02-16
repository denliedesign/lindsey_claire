@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-5">Summer</h1>
{{--        <p class="text-center">--}}
{{--            <a href="/images/calendar.pdf" target="_blank">View Our Full Calendar</a>--}}
{{--        </p>--}}
        <div class="d-flex justify-content-center my-4">
            <a href="https://app.thestudiodirector.com/lindseyclairedancecomp/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Register</div></a>
        </div>
        <div class="row">
            <div class="col-sm">
                <img src="/images/summer-camps-2023.jpg" alt="summer camps" class="img-fluid">
            </div>
            <div class="col-sm">
                <img src="/images/summer-schedule-2023.jpg" alt="summer schedule" class="img-fluid">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-3"></div>
            <div class="col-sm">
                <img src="/images/summer-info-2023.jpg" alt="summer info" class="img-fluid">
            </div>
            <div class="col-sm-3"></div>
{{--            <div class="col-sm">--}}
{{--                <img src="/images/fall-registration.png" alt="fall registration" class="img-fluid">--}}
{{--            </div>--}}
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <img src="/images/summer-frozen-1.jpg" alt="summer info" class="img-fluid my-2">
            <img src="/images/summer-frozen-2.jpg" alt="summer info" class="img-fluid my-2">
            <img src="/images/summer-tumble-1.jpeg" alt="summer info" class="img-fluid my-2">
            <img src="/images/summer-tumble-2.jpg" alt="summer info" class="img-fluid my-2">
            <img src="/images/summer-dance.jpg" alt="summer info" class="img-fluid my-2">
            <img src="/images/summer-ballet.jpeg" alt="summer info" class="img-fluid my-2">
            <img src="/images/summer-princess.jpeg" alt="summer info" class="img-fluid my-2">
            <img src="/images/summer-musical.jpeg" alt="summer info" class="img-fluid my-2">

        </div>
    </div>

@endsection
