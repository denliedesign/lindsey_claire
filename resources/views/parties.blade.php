@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-5">Birthday Parties</h1>
        <p class="text-center mb-5">
            <a href="https://forms.gle/iLqwvfVHUQQdT4hX8" target="_blank" class="btn btn-redish btn-lg">Book Your Party Now!</a>
        </p>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            <img src="/images/party.jpg" alt="birthday parties" class="img-fluid">
            <img src="/images/party-packages.jpg" alt="birthday parties" class="img-fluid">
            <img src="/images/party-add-ons.jpg" alt="birthday parties" class="img-fluid">
        </div>
{{--        <h2 class="text-center text-uppercase fw-bold mt-4" style="font-size: 4em;">Book Your Party Now!</h2>--}}
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 my-4">
            <div class="col d-flex justify-content-center align-items-center"><img src="/images/party-image.jpg" alt="party" class="img-fluid"></div>
{{--            <div class="col">--}}
{{--                <div>--}}
{{--                    <iframe--}}
{{--                        src="https://link.enrollio.ai/widget/form/jIsVaf78Rbb7SIXTrG52"--}}
{{--                        style="width:100%;height:100%;border:none;border-radius:4px"--}}
{{--                        id="inline-jIsVaf78Rbb7SIXTrG52"--}}
{{--                        data-layout="{'id':'INLINE'}"--}}
{{--                        data-trigger-type="alwaysShow"--}}
{{--                        data-trigger-value=""--}}
{{--                        data-activation-type="alwaysActivated"--}}
{{--                        data-activation-value=""--}}
{{--                        data-deactivation-type="neverDeactivate"--}}
{{--                        data-deactivation-value=""--}}
{{--                        data-form-name="Website Birthday Form"--}}
{{--                        data-height="658"--}}
{{--                        data-layout-iframe-id="inline-jIsVaf78Rbb7SIXTrG52"--}}
{{--                        data-form-id="jIsVaf78Rbb7SIXTrG52"--}}
{{--                        title="Website Birthday Form"--}}
{{--                    >--}}
{{--                    </iframe>--}}
{{--                    <script src="https://link.enrollio.ai/js/form_embed.js"></script>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col d-flex justify-content-center align-items-center"><img src="/images/party-image-2.jpg" alt="party" class="img-fluid"></div>
        </div>
    </div>

@endsection
