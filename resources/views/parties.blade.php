@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-5">Birthday Parties</h1>
        <p class="text-center mb-5">
            <a href="https://forms.gle/iLqwvfVHUQQdT4hX8" target="_blank">Book Your Party Now!</a>
        </p>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            <img src="/images/party.jpg" alt="birthday parties" class="img-fluid">
            <img src="/images/party-packages.jpg" alt="birthday parties" class="img-fluid">
            <img src="/images/party-add-ons.jpg" alt="birthday parties" class="img-fluid">
        </div>
        <div class="row my-5">
            <div class="col d-flex justify-content-center"><img src="/images/party-image.jpg" alt="party" class="img-fluid"></div>
            <div class="col d-flex justify-content-center"><img src="/images/party-image-2.jpg" alt="party" class="img-fluid"></div>
        </div>
    </div>

@endsection
