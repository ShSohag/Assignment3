

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{asset('fontEnd/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('fontEnd/css/contact.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('fontEnd/css/single.css')}}" rel='stylesheet' type='text/css' />
    <link  href="{{asset('fontEnd/css/jquery.desoslide.css')}}"rel="stylesheet">
    <link href="{{asset('fontEnd/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('fontEnd/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
          rel="stylesheet">
</head>

<body>
<!--Header-->
@include('partial.header')
<!--EndHeader-->

<!--manu start-->

@include('partial.menu')
<!--manu End-->

<!--/bannerSlide-->
@include('frontEnd.bannerSlider')

<!--//banner-->
<!--contentBOdy-->
@yield('mainContent')
<!--EndcontentBOdy-->
<!--Bigfooter-->
@include('frontEnd.bigFooter')
<!-- endBigfooter -->

<!--footerStart-->
@include('frontEnd.footer')
<!--footerEnd-->
<!-- js -->
<script src="{{asset('fontEnd/js/jquery-2.2.3.min.js')}}"></script>
<!-- //js -->
<!-- desoslide-JavaScript -->
@include('partial.javaScript')
</body>

</html>