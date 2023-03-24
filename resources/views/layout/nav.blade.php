{{-- <header class="fw-head"> --}}
<header>
    <!-- header-inner  -->
    <div class="header-inner">
        <!-- header logo -->
        <div class="logo-holder">
            <a href="{{ url('/') }}"><img
                    src="{{ asset('images/logo.png') }}"
                    alt=""
                ></a>
        </div>
        <!-- header logo end -->
        <!-- mobile nav button -->
        <div class="nav-button-holder">
            <div class="nav-button vis-m"><span></span><span></span><span></span></div>
        </div>
        <!-- mobile nav button end -->
        <!-- navigation  -->
        <div class="nav-holder">
            <nav>
                <ul>
                    <li><a
                            href="{{ url('/') }}"
                            class="act-link"
                        ><span>Home</span></a></li>
                    <li><a href="onepage-1.html#sec2"><span>About</span></a></li>
                    <li><a href="{{ url('portfolio') }}"><span>Portfolio</span></a></li>
                    <li><a href="onepage-1.html#sec3"><span>Works</span></a></li>
                    <li><a href="onepage-1.html#sec6"><span>Services</span></a></li>
                    <li><a href="onepage-1.html#sec7"><span>Contacts</span></a></li>
                    <li><a
                            href="blog.html"
                            class="external"
                        ><span>Blog</span></a></li>
                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </div>
    <!-- header-inner  end -->
    <!-- share button  -->
    <div class="show-share isShare">
        <span>Share</span>
        <i class="fa fa-chain-broken"></i>
    </div>
    <!-- share  end-->
</header>
