<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Lindsey Claire Dance Company | Jackson, MS">
    <meta property="og:description" content="Through quality dance lessons we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking.">
    {{--    <meta property="og:image" content="">--}}
    {{--    <meta property="og:url" content="">--}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="description" content="@yield('description', 'Through quality dance lessons we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking.')">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>@yield('title', 'Lindsey Claire Dance Company | Jackson, MS')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EW7W7ZRXR5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-EW7W7ZRXR5');
    </script>


    @if(session()->has('message'))
        <div class="alert alert-success mb-0" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif

    @include('top')
    @include('header')
    @yield('content')
    @include('footer')

</head>

<body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/script.js"></script>

<script>
    tinymce.init({
        selector: '#text-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });
</script>

{{--<chat-widget--}}
{{--    location-id="kcqmXLu5LSAaMIxrcJ3H"--}}
{{--    style="--chat-widget-primary-color: #ea1b3f; --chat-widget-active-color:#ea1b3f ;--chat-widget-bubble-color: #ea1b3f ;"--}}
{{--    sub-heading="Enter your question below and a team member will get right back to you!"--}}
{{--    prompt-msg="Hi! This is Miss Allyson  of Lindsey Claire Dance Company. How can we help?"--}}
{{--    success-msg="One of our team members will contact you shortly!"--}}
{{--    prompt-avatar="https://firebasestorage.googleapis.com/v0/b/highlevel-backend.appspot.com/o/locationPhotos%2FkcqmXLu5LSAaMIxrcJ3H%2Fchat-widget-person?alt=media&token=d1bb6fe1-f634-4e4b-9d65-6eb809f51f20"--}}
{{--    locale="en-us"--}}
{{--    primary-color="#ea1b3f">--}}
{{--</chat-widget>--}}
{{--<script--}}
{{--    src="https://widgets.leadconnectorhq.com/loader.js"--}}
{{--    data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js" >--}}
{{--</script>--}}

<script src="//code.tidio.co/ponxijpidc87ncf8onszbdvdbxvab9b2.js" async></script>

</body>
</html>

