@extends('layouts.app')

@section('title', 'Lindsey Claire Dance Company | Crystal Springs, MS')
@section('description', 'Dance Studio Crystal Springs MS. Looking for Tumbling, Cheer, or Gymnastics in Crystal Springs, MS, join our LCDC family today.')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center mt-5">Crystal Springs Summer Schedule</h1>
        <p class="text-center my-3">
            <a href="mailto:crystalsprings@lcdanceco.com">crystalsprings@lcdanceco.com</a>
        </p>
        <div class="d-flex justify-content-center my-4">
            <a href="https://app.thestudiodirector.com/lindseyclairedancecomp/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="mx-3 shadow btn btn-lg btn-red btn-family">Register</div></a>
            <a href="/images/cs/summer-cs.pdf" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mx-3">View PDF</div></a>
        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="col"><img src="/images/cs/summer-cs-1.jpg" alt="summer graphic" class="img-fluid my-3 rounded"></div>
            <div class="col"><img src="/images/cs/summer-cs-2.jpg" alt="summer graphic" class="img-fluid my-3 rounded"></div>
            <div class="col"><img src="/images/cs/summer-cs-3.jpg" alt="summer graphic" class="img-fluid my-3 rounded"></div>
            <div class="col"><img src="/images/cs/summer-cs-4.jpg" alt="summer graphic" class="img-fluid my-3 rounded"></div>
            <div class="col"><img src="/images/cs/summer-cs-5.jpg" alt="summer graphic" class="img-fluid my-3 rounded"></div>
            <div class="col"><img src="/images/cs/summer-cs-6.jpg" alt="summer graphic" class="img-fluid my-3 rounded"></div>
        </div>


{{--        <p class="text-center">--}}
{{--            Come one, Come all to the greatest week of summer! Wanting to improve your tumbling technique for cheer or gymnastics, or just want to learn something new? Our Circus camp is perfect for learning the basics in tumble & cheer! This camp is for ages 2-6 year olds June 20-24.--}}
{{--            <br><br>--}}
{{--            Our first summer camp announced for our Crystal Springs location! You can sign up online today through the link below. We will be doing our first summer camp in June with a performance at the Tomato festival Friday of camp week!--}}
{{--        </p>--}}

        <!-- old fall schedule content -->
        <h1 class="text-center mt-5">Crystal Springs Fall Schedule</h1>
        <p class="text-center my-3">
            <a href="mailto:crystalsprings@lcdanceco.com">crystalsprings@lcdanceco.com</a>
        </p>
        <div class="d-flex justify-content-center my-4">
            <a href="https://app.thestudiodirector.com/lindseyclairedancecomp/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="mx-3 shadow btn btn-lg btn-red btn-family">Register</div></a>
            <a href="/images/24-25-cs-schedule.pdf" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mx-3">View PDF</div></a>
        </div>
        <div class="my-3">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <img src="/images/24-25-cs-schedule_page-0001.jpg" alt="classes" class="img-fluid my-1">
                <img src="/images/24-25-cs-schedule_page-0002.jpg" alt="classes" class="img-fluid my-1">
                <img src="/images/24-25-cs-schedule_page-0003.jpg" alt="classes" class="img-fluid my-1">
                <img src="/images/24-25-cs-schedule_page-0004.jpg" alt="classes" class="img-fluid my-1">
                <img src="/images/24-25-cs-schedule_page-0005.jpg" alt="classes" class="img-fluid my-1">
                <img src="/images/24-25-cs-schedule_page-0006.jpg" alt="classes" class="img-fluid my-1">
            </div>
        </div>
        <!-- end old fall schedule content -->

{{--        <div class="row">--}}
{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="/images/crystal-springs-schedule.png" alt="crystal springs schedule" class="img-fluid">--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <img src="/images/tumble-crystal-springs-ms.JPG" alt="summer camps" class="img-fluid">--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <img src="/images/dance-crystal-springs-ms.JPG" alt="summer camps" class="img-fluid">--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

@endsection
