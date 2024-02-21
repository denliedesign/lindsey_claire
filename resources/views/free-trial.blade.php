@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md d-flex align-items-center justify-content-center"><h2 class="text-center text-uppercase fw-bold mt-4" style="font-size: 4em;">Try your first dance class for free!</h2></div>
            <div class="col-md">
                <iframe
                    src="https://link.enrollio.ai/widget/form/RuIyltdW79MEeX2n98up"
                    style="width:100%;height:100%;border:none;border-radius:13px"
                    id="inline-RuIyltdW79MEeX2n98up"
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-trigger-value=""
                    data-activation-type="alwaysActivated"
                    data-activation-value=""
                    data-deactivation-type="neverDeactivate"
                    data-deactivation-value=""
                    data-form-name="Website Free Trial Class Form"
                    data-height="867"
                    data-layout-iframe-id="inline-RuIyltdW79MEeX2n98up"
                    data-form-id="RuIyltdW79MEeX2n98up"
                    title="Website Free Trial Class Form"
                >
                </iframe>
            </div>
            <script src="https://link.enrollio.ai/js/form_embed.js"></script>
        </div>
    </div>

@endsection
