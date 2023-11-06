@extends('layouts.app')

@section('title', 'Lindsey Claire Dance Company | Crystal Springs, MS')
@section('description', 'Dance Studio Crystal Springs MS. Looking for Tumbling, Cheer, or Gymnastics in Crystal Springs, MS, join our LCDC family today.')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center mt-5">Crystal Springs</h1>
        <p class="text-center my-3">
            <a href="mailto:crystalsprings@lcdanceco.com">crystalsprings@lcdanceco.com</a>
        </p>
{{--        <p class="text-center">--}}
{{--            Come one, Come all to the greatest week of summer! Wanting to improve your tumbling technique for cheer or gymnastics, or just want to learn something new? Our Circus camp is perfect for learning the basics in tumble & cheer! This camp is for ages 2-6 year olds June 20-24.--}}
{{--            <br><br>--}}
{{--            Our first summer camp announced for our Crystal Springs location! You can sign up online today through the link below. We will be doing our first summer camp in June with a performance at the Tomato festival Friday of camp week!--}}
{{--        </p>--}}
        <div class="d-flex justify-content-center my-4">
            <a href="https://app.thestudiodirector.com/lindseyclairedancecomp/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Sign Up Today!</div></a>
        </div>
        <div class="my-3">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                <img src="/images/2_1.jpg" alt="classes" class="img-fluid my-1">
                <img src="/images/3_1.jpg" alt="classes" class="img-fluid my-1">
                <img src="/images/4_1.jpg" alt="classes" class="img-fluid my-1">
                <img src="/images/5_1.jpg" alt="classes" class="img-fluid my-1">
            </div>
        </div>
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
