@extends('layouts.app')

@section('title', 'Dance Lesson Ridgeland MS | Lindsey Claire Dance Company')
@section('description', 'Contact Us Today For a Dance Lessons in Ridgeland MS. We Offer A Variety Of Styles For All Ages.')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-5">Dance Lessons in Ridgeland MS</h1>
        <p class="text-center">
            Looking for dance lessons in Ridgeland MS? At Lindsey Claire Dance Company you can take Ballet, Tap, Jazz, Hip Hop, Contemporary, Musical Theatre, Cheer, Tumble, Acro, and more! We have classes for ages 0-18. Start your dance lesson in Ridgeland MS today!
        </p>
        <div class="d-flex justify-content-center my-4">
            <a href="https://app.thestudiodirector.com/lindseyclairedancecomp/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mx-2">Sign Up Here!</div></a>
            <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-gray btn-family mx-2" style="width: 100%;">Learn More</div></a>

        </div>
        <div class="row">
            <div class="col-sm">
                <img src="/images/dance-lesson-ridgeland-ms.jpg" alt="young dancers jumping on stage" class="img-fluid shadow rounded" style="height: 424px; width: 100%; object-fit: cover; object-position: top;">
            </div>
            <div class="col-sm">
                <img src="/images/dance-lessons-ridgeland-ms.jpg" alt="young dancer smiling" class="img-fluid shadow rounded" style="height: 424px; width: 100%; object-fit: cover; object-position: top;">
            </div>
        </div>
    </div>

@endsection
