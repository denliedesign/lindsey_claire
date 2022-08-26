@extends('layouts.app')

@section('title', 'Dance Madison MS | Lindsey Claire Dance Company')
@section('description', 'Your Dance Studio For All Ages & Styles of Dance Madison MS. Be A Part of The LCDC Family.')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-5">Dance Madison MS</h1>
        <p class="text-center">
            Lindsey Claire Dance Company has built a reputation for excellence in dance instruction. We have dance in Madison MS for everyone! From beginners to pre-professional level our dancers develop more than technique but also important life skills. If you are looking to try a dance lesson in Madison MS click the button below and begin today!
        </p>
        <div class="d-flex justify-content-center my-4">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf4_kZvj9dTrKiiT2q4Ynq3ZJ2g1gZ6JQ0qNPUDFLrwaOkeew/viewform" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mx-2">Schedule A Trial</div></a>
            <a href="https://app.thestudiodirector.com/lindseyclairedancecomp/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mx-2">Register for Classes</div></a>
        </div>
        <div class="row">
            <div class="col-sm">
                <img src="/images/dance-lesson-madison-ms.jpg" alt="young dancers jumping on stage" class="img-fluid shadow rounded" style="height: 424px; width: 100%; object-fit: cover; object-position: top;">
            </div>
            <div class="col-sm">
                <img src="/images/dance-lessons-madison-ms.jpg" alt="young dancer smiling" class="img-fluid shadow rounded" style="height: 424px; width: 100%; object-fit: cover; object-position: top;">
            </div>
            <div class="col-sm">
                <img src="/images/dance-madison-ms.jpg" alt="young dancer smiling" class="img-fluid shadow rounded" style="height: 424px; width: 100%; object-fit: cover; object-position: top;">
            </div>
        </div>
        <div class="mt-4">
            @include('class-descriptions')
        </div>
    </div>

@endsection
