@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1 class="text-center my-5">Tuition</h1>
        <div class="row" style="color: white;">
            <div class="col-sm">
                <div class="gradient-splash p-4 my-4">
                    <p>
                        All tuition payments will be withdrawn automatically from your account. Please fill out an
                        <a href="/images/parents-ach-form.pdf" target="_blank" class="text-white">ACH Form</a> and read more about this policy in our
                        <a href="/images/parents-policy-handbook.pdf" target="_blank" class="text-white">LCDC Policy Handbook</a>.
                    </p>
                </div>
                <div class="gradient-splash p-4 my-4">
                    <p>
                        There is a $5 discount for any additional family members enrolled in classes.
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div class="gradient-splash p-4 my-4">
                    <h3>Monthly Tuition Rates</h3>
                    <p>
                        30 minutes - $43
                        <br>45 minutes - 1 hour - $66
                        <br>1:15 - 2 hours $104
                        <br>2:15 - 3 hours $127
                        <br>3:15 - 4 hours $145
                        <br>4:15 - 5 hours $169
                        <br>5:15- 6 hours $193
                        <br>6:15 - 7 hours $205
                        <br>7:15 - 8 hours $229
                        <br>8:15 - 9 hours - $247
                    </p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <img src="/images/payment-schedule.jpg" alt="payment schedule" class="img-fluid">
        </div>
    </div>

@endsection
