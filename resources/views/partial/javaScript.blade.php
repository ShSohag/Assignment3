<script src="{{asset('fontEnd/js/jquery.desoslide.js')}}"></script>
<script>
    $('#demo1_thumbs').desoSlide({
        main: {
            container: '#demo1_main_image',
            cssClass: 'img-responsive'
        },
        effect: 'sideFade',
        caption: true
    });
</script>

<!-- requried-jsfiles-for owl -->
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

    });
</script>
<script>
    $(window).load(function () {
        $("#flexiselDemo2").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

    });
</script>
<script src="{{asset('fontEnd/js/jquery.flexisel.js')}}"></script>
<!-- //password-script -->
<!--/ start-smoth-scrolling -->
<script src="{{asset('fontEnd/js/move-top.js')}}"></script>
<script src="{{asset('fontEnd/js/easing.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!--// end-smoth-scrolling -->

<script>
    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<a href="#home" class="scroll" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>

<!-- //Custom-JavaScript-File-Links -->
<script src="{{asset('fontEnd/js/bootstrap.js')}}"></script>



