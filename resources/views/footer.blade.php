<div class="bg-white">
    <div class="container">
        <div id="next-steps-copy" class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center bg-white pt-5 pb-3">
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-red">Ready To Leap In?</p>
                <a href="https://app.thestudiodirector.com/lindseyclairedancecomp/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">&#10097; Enroll today!</div></a>
            </div>
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-redish">Want To Give It A Try?</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSf4_kZvj9dTrKiiT2q4Ynq3ZJ2g1gZ6JQ0qNPUDFLrwaOkeew/viewform" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-redish btn-family">&#10097; Schedule A Trial!</div></a>
            </div>
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-gray">Still Have Questions?</p>
                <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-gray btn-family">&#10097; Contact Us!</div></a>
            </div>
        </div>
    </div>
</div>
<div class="bg-white pb-5">
    <div class="container" id="footer">
        <div class="pt-5">
            <div class="row m-0 p-0">
                <div class="col-sm-4 mt-3">
                    <p class="lead">CONTACT</p>
                    <ul class="list-group">
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="navigate"></ion-icon>
                            4149 South Siwell Road, Byram, MS 39272
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="call"></ion-icon>
                            601-398-3786
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="mail"></ion-icon>
                            <a href="mailto:info@lcdanceco.com" style="color: black; text-decoration: none;">info@lcdanceco.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 mt-3">
                    <p class="lead">SOCIAL</p>
                    <div class="d-flex d-inline">
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0" href="https://www.facebook.com/LindseyClaireDanceCompany/" target="_blank">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0 mx-3" href="https://www.instagram.com/lcdanceco/" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0" href="https://www.youtube.com/channel/UClbUAY9zOKW1YRd5vnVEnHQ" target="_blank">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </div>
                    </div>
                    <div class="mt-3">
                        <img src="/images/logo-lcdc-sm.png" alt="logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-6 mt-3 ml-4">
                    <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=4149%20South%20Siwell%20Road,%20Byram,%20MS%2039272+(Lindsey%20Claire%20Dance%20Company)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="bottom" class="text-white-50 text-center pt-3" style="background: black;">
    © 2022 Lindsey Claire Dance Company
</div>
<p id="credit" class="text-center m-0" style="background: black;">
    <a class="text-decoration-none" href="/dance-studios-jackson-ms"><small class="text-muted">Dance Studios Jackson MS</small></a>
    &nbsp; / &nbsp;
    <a class="text-decoration-none" href="/dance-lesson-ridgeland-ms"><small class="text-muted">Dance Lesson Ridgeland MS</small></a>
    &nbsp; / &nbsp;
    <a class="text-decoration-none" href="/dance-madison-ms"><small class="text-muted">Dance Madison MS</small></a>
    &nbsp; / &nbsp;
    <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>
    &nbsp; / &nbsp;
    @guest
        <small>
            <a class="text-decoration-none text-muted" href="{{ route('login') }}">{{ __('Admin') }}</a>
        </small>
    @else
        <small class="dropdown">
            <a class="text-decoration-none text-muted" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</small>
@endguest
    &nbsp; / &nbsp;
</p>
<div style="background: black;" class="text-center pb-3">

</div>
