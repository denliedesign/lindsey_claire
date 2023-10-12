@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-5">Current Members</h1>
        <div class="row">
            <div class="col-sm d-flex align-items-center justify-content-center">
                <p class="text-center text-uppercase">
{{--                    <a href="/images/christmas-newsletter.pdf" target="_blank">2022 Christmas Celebration Newsletter</a>--}}
                    <br><br>
                    <a href="/images/parents-calendar-23.pdf" target="_blank">2023/2024 CALENDAR</a>
                    <br><br>
                    <a href="/images/parents-membership-waiver-agreement-23.pdf" target="_blank">2023/2024 MEMBERSHIP AGREEMENT/LIABILITY WAIVER</a>
                    <br><br>
                    <a href="/images/parents-ach-form-23.pdf" target="_blank">ACH FORM (AUTO DRAFT FORM)</a>
                    <br><br>
                    <a href="/images/parents-draft-schedule-22.pdf" target="_blank">DRAFT SCHEDULE</a>
                    <br><br>
                    <a href="/images/parents-policy-handbook-22.pdf" target="_blank">POLICY HANDBOOK</a>
                    <br><br>
                    <a href="/images/parents-welcome-letter-23.pdf" target="_blank">2023/2024 WELCOME LETTER</a>
                    <br><br>
                    <a href="https://www.shopnimbly.com/lcdanceco" target="_blank">ORDER DANCEWEAR</a>
                </p>
            </div>
            <div class="col-sm">
                <img src="/images/dance-store.jpg" alt="dance store" class="img-fluid" style="max-width: 522px; width: 100%;">
                <img src="/images/revolution-dancewear.jpg" alt="dancewear that gives back" class="img-fluid" style="max-width: 522px; width: 100%;">
            </div>
        </div>
    </div>

@endsection
