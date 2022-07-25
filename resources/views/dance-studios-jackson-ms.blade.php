@extends('layouts.app')

@section('title', 'Dance Studios Jackson MS | Lindsey Claire Dance Company')
@section('description', 'Looking for Dance Lessons in Jackson MS? Our Mississippi Dance Studio Offers A Variety Of Styles For All Ages As Well As Performing & Competitive Opportunities.')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-5">Dance Studios in Jackson MS</h1>
        <p class="text-center">
            Lindsey Claire Dance Company offers dance classes in Jackson MS with our dance studios in Byram and Crystal Springs. We offer dance classes for toddlers and all ages through elementary and high school. Some of our popular styles include Ballet, Tap, Jazz, Hip Hop, Contemporary, Lyrical, Musical Theatre, Cheer, Tumble, and Acro.
        </p>
        <div class="d-flex justify-content-center my-4">
            <a href="https://app.thestudiodirector.com/lindseyclairedancecomp/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mx-2">Sign Up Today!</div></a>
            <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-gray btn-family mx-2" style="width: 100%;">Learn More</div></a>

        </div>
        <div class="row">
            <div class="col-sm">
                <img src="/images/dance-studios-jackson-ms.jpg" alt="young dancers jumping on stage" class="img-fluid shadow rounded" style="height: 424px; width: 100%; object-fit: cover; object-position: center;">
            </div>
            <div class="col-sm">
                <img src="/images/dance-classes-jackson-ms.jpg" alt="young dancer smiling" class="img-fluid shadow rounded" style="height: 424px; width: 100%; object-fit: cover; object-position: top;">
            </div>
        </div>
    </div>

@endsection
