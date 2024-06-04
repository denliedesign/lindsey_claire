@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-5">Competition Teams</h1>
        <p class="text-center">
            LCDC has Dance competition teams & Cheer All Star teams. These teams are made up of the most elite dancers & tumblers at the studio. Students on the competition teams are serious about their training and expected to be at their regularly scheduled practice times during the week and go to our scheduled competitions. Although we have a strict schedule and high expectations for our students on our competitive teams, we are a family. We work hard together, and we celebrate and have fun together!
            The LCDC competition teams are chosen by audition. We are currently looking for individuals to compete. If you would like more information regarding competition teams please contact:
            601-398-3786.
        </p>
        <div class="row">
            <div class="col-sm">
                <img src="/images/audition-dance.jpg" alt="audition poster" class="img-fluid">
            </div>
            <div class="col-sm">
                <img src="/images/audition-cheer.jpeg" alt="audition poster" class="img-fluid">
            </div>
        </div>

        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
            <div class="my-2" style="max-height: 408px; overflow: hidden; object-fit: cover;"><img src="/images/comp-v-1.jpg" alt="competition" class="img-fluid"></div>
            <div class="my-2" style="max-height: 408px; overflow: hidden; object-fit: cover;"><img src="/images/comp-v-2.jpg" alt="competition" class="img-fluid"></div>
            <div class="my-2" style="max-height: 408px; overflow: hidden; object-fit: cover;"><img src="/images/comp-v-3.jpg" alt="competition" class="img-fluid"></div>
            <div class="my-2" style="max-height: 408px; overflow: hidden; object-fit: cover;"><img src="/images/comp-v-4.jpg" alt="competition" class="img-fluid"></div>
            <div class="my-2" style="max-height: 408px; overflow: hidden; object-fit: cover;"><img src="/images/comp-v-5.jpg" alt="competition" class="img-fluid"></div>
            <div class="my-2" style="max-height: 408px; overflow: hidden; object-fit: cover;"><img src="/images/comp-v-6.jpg" alt="competition" class="img-fluid"></div>
            <div class="my-2" style="max-height: 408px; overflow: hidden; object-fit: cover;"><img src="/images/comp-v-7.jpg" alt="competition" class="img-fluid"></div>
            <div class="my-2" style="max-height: 408px; overflow: hidden; object-fit: cover;"><img src="/images/comp-v-8.jpg" alt="competition" class="img-fluid"></div>
        </div>
        <div class="row">
            {{--            <div class="col-sm">--}}
            {{--                <img src="/images/cheer-and-competition-flyer.png" alt="competition and cheer flyer" class="img-fluid">--}}
            {{--            </div>--}}
            <div class="col-sm-2"></div>
            <div class="col-sm">
{{--                <img src="/images/competition-graphic.jpg" alt="" class="img-fluid">--}}
                {{--                <img src="/images/comp-h-1.jpg" alt="competition" class="img-fluid mb-4">--}}
                {{--                <img src="/images/comp-h-3.jpg" alt="competition" class="img-fluid">--}}
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

@endsection
