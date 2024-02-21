@extends('layouts.app')
@section('content')

    <div class="gradient-splash">
        <div id="primary-bg">
            <div class="color-filter-gradient-black"></div>
            <h2 id="primary-txt-mobile" class="d-md-none">dance & tumble lessons that teach life lessons</h2>
            <h2 id="primary-txt" class="d-none d-md-block">dance & tumble lessons that teach life lessons</h2>
            {{--        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-md-none btn-opacity"><div id="button-mobile" class="shadow btn btn-lg btn-kapa-redish primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>--}}
            {{--        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-none d-md-block btn-opacity"><div id="button-tablet" class="shadow btn btn-lg btn-kapa-redish primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>--}}
        </div>

        {{--    @include('trial-modal')--}}

        <div class="container">
            <div id="next-steps">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center">
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-red">Ready To Leap In?</p>
                        <a href="https://app.thestudiodirector.com/lindseyclairedancecomp/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">&#10097; Enroll today!</div></a>
                    </div>
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-redish">Want To Give It A Try?</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf4_kZvj9dTrKiiT2q4Ynq3ZJ2g1gZ6JQ0qNPUDFLrwaOkeew/viewform" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-redish btn-family">&#10097; Schedule A Trial!</div></a>
                        {{--                    <div>--}}
                        {{--                        <button type="button" class="shadow btn btn-lg btn-blue btn-family btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!</button>--}}
                        {{--                    </div>--}}
                    </div>
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-gray">Still Have Questions?</p>
                        <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-gray btn-family">&#10097; Contact Us!</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="vision" class="text-center text-white">
            <div class="container">
                <h2>We Have Built a Reputation for Excellence in Dance & Tumble Instruction</h2>
                <p>
                    From your child’s first class to their graduation performance, LCDC has classes at two locations: Byram & Crystal Springs MS for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, LCDC is More Than Just Great Dancing®! Our dancers & tumblers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
                </p>
            </div>
        </div>
    </div>

{{--    <div class="bg-white">--}}
{{--        <div class="container">--}}
{{--            <div class="row my-3">--}}
{{--                <div class="col-sm">--}}
{{--                    <img src="/images/showcase-sponsor.png" alt="showcase sponsor" class="img-fluid">--}}
{{--                </div>--}}
{{--                <div class="col-sm">--}}
{{--                    <img src="/images/showcase-rockstar.jpg" alt="rockstar logo" class="img-fluid">--}}
{{--                    <h2 class="text-center">Showcase</h2>--}}
{{--                    <p class="text-center">--}}
{{--                        Saturday June 4, 2022 at 4pm--}}
{{--                        <br><br>--}}
{{--                        Carmel High School Performing Arts Center--}}
{{--                        <br>3600 Ocean Ave--}}
{{--                        <br>Carmel-By-The-Sea, CA 93923--}}
{{--                        <br><br>--}}
{{--                        <strong>Tickets go on sale May 1</strong>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="bg-white pb-5" id="class-categories">
        <div class="container">
{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="/images/open-house-22.png" alt="open house invite" class="img-fluid">--}}
{{--            </div>--}}
{{--            <h2 class="text-center pt-5">Tumble & Dance Classes in Jackson MS</h2>--}}
{{--            <p class="text-center text-muted">Mississippi Dance in Byram, Crystal Springs, & Surrounding Areas</p>--}}
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm mt-4">
                    <img src="/images/baby-and-me.jpg" alt="dancers" class="img-fluid shadow rounded" style="max-height: 204px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2" style="width: 100%;">Baby & Me</div></a>
                    <div class="text-center text-muted" style="font-size: 14px;">Ages 0-2.5</div>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/twinkle-babies.jpg" alt="dancers" class="img-fluid shadow rounded" style="max-height: 204px; object-fit: cover; object-position: -20% 45%; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-redish btn-family mt-2" style="width: 100%;">Twinkle Babies</div></a>
                    <div class="text-center text-muted" style="font-size: 14px;">Ages 2.5-3</div>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/twinkle-stars.jpg" alt="dancers" class="img-fluid shadow rounded" style="max-height: 204px; object-fit: cover; object-position: -20% 45%; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2" style="width: 100%;">Twinkle Stars</div></a>
                    <div class="text-center text-muted" style="font-size: 14px;">Ages 3-6</div>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/star-track.jpg" alt="dancers" class="img-fluid shadow rounded" style="max-height: 204px; object-fit: cover; object-position: -20% 20%; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-redish btn-family mt-2" style="width: 100%;">Star Track</div></a>
                    <div class="text-center text-muted" style="font-size: 14px;">Ages 2-6</div>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/ballet.jpg" alt="dancers" class="img-fluid shadow rounded" style="max-height: 204px; object-fit: cover; object-position: -20% 12%; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2" style="width: 100%;">Ballet, Tap, Jazz</div></a>
                    <div class="text-center text-muted" style="font-size: 14px;">Ages 7+</div>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/hip-hop.jpg" alt="dancers" class="img-fluid shadow rounded" style="max-height: 204px; object-fit: cover; object-position: -20% 50%; width: 100%;">
                    <a href="/classes" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-redish btn-family mt-2" style="width: 100%;"><span style="font-size: 0.7em;">Hip Hop, Contemporary, Lyrical & More</span></div></a>
                    <div class="text-center text-muted" style="font-size: 14px;">Ages 7+</div>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/musical-theatre.jpeg" alt="dancers" class="img-fluid shadow rounded" style="max-height: 204px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2" style="width: 100%;">Musical Theatre</div></a>
                    <div class="text-center text-muted" style="font-size: 14px;">Ages 7+</div>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/cheer.jpeg" alt="dancers" class="img-fluid shadow rounded" style="max-height: 204px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-redish btn-family mt-2" style="width: 100%;"><span style="font-size: 0.7em;">Cheer, Tumble & Acro Tumble</span></div></a>
                    <div class="text-center text-muted" style="font-size: 14px;">Ages 2-6, 6+</div>
                </div>
            </div>
        </div>
    </div>

    <div id="checklist-bg">
        <div class="color-filter-black"></div>
        <h2 class="secondary-txt d-none d-md-block">Parents <ion-icon name="heart"></ion-icon> <span class="txt-red">LCDC</span>...</h2>
        <div class="row secondary-txt-pos text-white text-center">
            <div class="col-sm">
                <p class="my-0 text-capitalize">
                    <ion-icon name="heart"></ion-icon> Safer Studio
                    <br><ion-icon name="heart"></ion-icon> Tech Enabled
                    <br><ion-icon name="heart"></ion-icon> Secured Facility
                </p>
            </div>
            <div class="col-sm">
                <p class="my-0">
                    <ion-icon name="heart"></ion-icon> Written Curriculum
                    <br><ion-icon name="heart"></ion-icon> Full-Time Admin
                    <br><ion-icon name="heart"></ion-icon> YPAD Certified
                </p>
            </div>
            <div class="col-sm">
                <p class="my-0">
                    <ion-icon name="heart"></ion-icon> Community Service
                    <br><ion-icon name="heart"></ion-icon> Background Checked
                    <br><ion-icon name="heart"></ion-icon> CPR Trained
                </p>
            </div>
        </div>
    </div>

{{--    <div class="bg-white py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm d-flex align-items-center">--}}
{{--                    <div>--}}
{{--                        <div class="d-flex justify-content-center mb-0">--}}
{{--                            <img src="/images/logo-raising-the-barre.png" alt="program logo" class="img-fluid">--}}
{{--                        </div>--}}
{{--                        <h3 class="text-center mt-4">Raising The Barre</h3>--}}
{{--                        <p class="">--}}
{{--                            <br><strong>Who:</strong>  Dancers ages 10-19 years of age – 5th Grade and up--}}
{{--                            <br><strong>Why:</strong>  Provide candidates with the skills and opportunities to make them compassionate, responsible, confident, and strong leaders.--}}
{{--                            <br><strong>What:</strong>  Raising the Barre is a youth community outreach group and a teacher assistant program. Raising the Barre students shall complete service and teaching hours as assigned by a Faculty Mentor who will help them schedule their commitments and guide them through their projects.--}}
{{--                            <br>--}}
{{--                            <br><strong>Mission Statement</strong>--}}
{{--                            <br>We serve the community through the giving of our time and talents. We are role models for the younger students in and outside of the classroom at the dance studio.--}}
{{--                            <br>--}}
{{--                            <br>To Sign up as a Raising the Barre Candidate or as a Parent Volunteer please complete and submit the appropriate application.  Please email info@lcdanceco.com for an application.--}}
{{--                        </p>--}}
{{--                        <img src="/images/raising-the-barre.jpg" alt="older dancers at barre" class="img-fluid shadow rounded">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm d-flex align-items-center justify-content-center">--}}
{{--                    <div class="">--}}
{{--                        <h3>Required Pillars of Character and Service</h3>--}}
{{--                        <p>--}}
{{--                            <strong>Leadership:</strong> <br>--}}
{{--                            Dance Class Teaching Assistant – At least 1 Class per week from September through May totaling Community Service hours earned Approximately 40 Hours per year or more--}}
{{--                            <br>--}}
{{--                            Classes that are the dancers’ age group and level and below <br>--}}
{{--                            Must Attend Mandatory Class Assistant Training <br>--}}
{{--                            <br>--}}
{{--                            <strong>Responsibility:</strong> <br>--}}
{{--                            Performance and Studio Volunteer <br>--}}
{{--                            Backstage, Crew, etc at any LCDC Performance/Event such as Twinkle Star Showcases, May Recitals, Holiday Parties. RTB Candidates can choose the events that work for them--}}
{{--                            <br>--}}
{{--                            <br>--}}
{{--                            <strong>Compassion:</strong> <br>--}}
{{--                            Community Service – At least 2 Community Service Events per semester to be arranged by the RTB Faculty.--}}
{{--                            <br>--}}
{{--                            Examples: Retirement Home Visits, Offering Free Dance Workshops to Underprivileged Youth and Children with Special Needs, Costume and Dancewear Drives, Flash Dance Mobs coupled with Goods Drive, etc.--}}
{{--                            <br>--}}
{{--                            <br>--}}
{{--                            <strong>Confidence:</strong> <br>--}}
{{--                            Etiquette & Public Speaking Experience <br>--}}
{{--                            <br>--}}
{{--                            <strong>Additional Commitments:</strong> <br>--}}
{{--                            Attend Quarterly Meetings – January, April, July/August, October.  At these quarterly meetings dancers who have met their goals for that quarter/year will be recognized.  Also, Confidence sessions will be held in conjunction with the quarterly meetings.--}}
{{--                            <br>--}}
{{--                            <br>--}}
{{--                            <strong>Eligibility Requirements:</strong> <br>--}}
{{--                            GPA – 3.0 or above and/or Honor Roll <br>--}}
{{--                            Regular Dance Class Attendance <br>--}}
{{--                            Positive attitude in class including compliance with dress code <br>--}}
{{--                            Parent Volunteers/Involvement: <br>--}}
{{--                            Business Sponsorships <br>--}}
{{--                            Volunteering at Community Service Events <br>--}}
{{--                            <br>--}}
{{--                            <strong>Benefits for Dancers:</strong> <br>--}}
{{--                            Valuable In Class Teacher Assistant Training <br>--}}
{{--                            “On the Job” Studio and Recital Management Skills <br>--}}
{{--                            Introduction to possible dance related careers and jobs <br>--}}
{{--                            Etiquette and Public Speaking Skills <br>--}}
{{--                            Community Service Hours required for High School and/or College Admission <br>--}}
{{--                            Broader World View - moving from the “me” generation to the “we” generation.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container">
        <h2 class="text-center text-uppercase fw-bold mt-4" style="font-size: 4em;">Learn More</h2>
        <iframe
            src="https://link.enrollio.ai/widget/form/MovOZJXA4LPpFx7fr0bi"
            style="width:100%;height:100%;border:none;border-radius:4px"
            id="inline-MovOZJXA4LPpFx7fr0bi"
            data-layout="{'id':'INLINE'}"
            data-trigger-type="alwaysShow"
            data-trigger-value=""
            data-activation-type="alwaysActivated"
            data-activation-value=""
            data-deactivation-type="neverDeactivate"
            data-deactivation-value=""
            data-form-name="Website Lead Capture Form"
            data-height="636"
            data-layout-iframe-id="inline-MovOZJXA4LPpFx7fr0bi"
            data-form-id="MovOZJXA4LPpFx7fr0bi"
            title="Website Lead Capture Form"
        >
        </iframe>
        <script src="https://link.enrollio.ai/js/form_embed.js"></script>
    </div>

    <div id="mtjgd-bg" class="text-white">
        <div class="color-filter-gradient-black"></div>
        <h2 class="secondary-txt">We're About More Than Just Great Dancing™</h2>
        <div>
            <div class="row tertiary-txt-pos">
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <p>
                        “We don’t teach kids to make great dancers, we teach dance to make great kids.”
                        <br>
                        <em>-Misty Lown</em>
                    </p>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <img src="/images/mtjgd-logo.png" alt="more than just great dancing logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="safer-youth" class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="width: 100%; height: 100%; filter: invert(1);">
                    </div>
                    <h2 class="text-center">LCDC is a Safer Studio™</h2>
                    <p>
                        LCDC focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/ypad-badge.png" alt="ypad logo" class="img-fluid" style="max-height: 354.04px;">
                    </div>
                    <h2 class="text-center">LCDC is Youth Protection Advocates in Dance®  Certified!</h2>
                    <p>
                        <span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Background checked and CPR certified teachers
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Safer Studio™ Policy
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Teacher training & proven curriculum
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> A focus on safety & wellness for every student
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Secured facilities
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Viewing windows
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Social media safety practices
                    </p>
                </div>
            </div>
        </div>
    </div>

        <div class="gradient-splash">
            @include('testimonials')
        </div>

    <div id="call-to-action" class="bg-white pt-5 pb-1">
        <div class="text-center pt-2">
            <h2 class="txt-kapa-redish">Be A Part Of Our <span class="txt-red">LCDC</span> Family!</h2>
            <p class="text-center text-muted">Dance Studios in Byram & Crystal Springs</p>
            {{--            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Dance With Us Today!</div></a>--}}
        </div>
    </div>


@endsection
