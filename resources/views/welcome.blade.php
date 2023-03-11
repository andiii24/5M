<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from monolit.kwst.net/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 17:16:19 GMT -->
{{-- header --}}
@include('layout.head')
{{-- /header --}}

<body>
    <!-- loader -->
    <div class="loader">
        <div id="movingBallG">
            <div class="movingBallLineG"></div>
            <div
                id="movingBallG_1"
                class="movingBallG"
            ></div>
        </div>
    </div>
    <!-- loader end -->
    <!--================= main start ================-->
    <div id="main">
        <!--=============== nav ===============-->
        @include('layout.nav')
        <!--=============== wrapper ===============-->
        <div id="wrapper">
            @yield('content')
        </div>
        <!-- wrapper end -->
        <!-- Fixed footer -->
        @include('layout.footer')

        <!-- Fixed footer end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    @include('layout.script')
</body>

<!-- Mirrored from monolit.kwst.net/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 17:16:36 GMT -->

</html>
