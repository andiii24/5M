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
        <footer class="fixed-footer">
            <div class="footer-social">
                <ul>
                    <li><a
                            href="https://www.facebook.com/profile.php?id=100085851463134"
                            target="_blank"
                        ><i class="fa fa-facebook"></i></a></li>
                    <li><a
                            href="https://www.t.me/mussie_5m"
                            target="_blank"
                        ><i class="fa fa-paper-plane"></i></a></li>
                    <li><a
                            href="#"
                            target="_blank"
                        ><i class="fa fa-instagram"></i></a></li>
                    <li><a
                            href="#"
                            target="_blank"
                        ><i class="fa fa-pinterest"></i></a></li>
                    <li><a
                            href="#"
                            target="_blank"
                        ><i class="fa fa-tumblr"></i></a></li>
                </ul>
            </div>
            <!-- Header  title -->
            <div class="footer-title">
                <h2><a href="#"></a></h2>
            </div>
            <!-- Header  title  end-->
        </footer>

        <!-- Fixed footer end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    @include('layout.script')
</body>

<!-- Mirrored from monolit.kwst.net/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 17:16:36 GMT -->

</html>
