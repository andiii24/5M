@extends('welcome')
@section('content')
    <!-- content-holder  -->
    <div class="content-holder">
        <!-- Page title -->
        <div class="dynamic-title">Portfolio horizontal</div>
        <!-- Page title  end-->
        <!-- content  -->
        <div class="content hor-content full-height pad-con no-bg-con">
            <!-- filter  -->
            <div class="filter-holder round-filter tcf">
                <div class="gallery-filters hid-filter">
                    <a
                        href="#"
                        class="gallery-filter transition2 gallery-filter_active"
                        data-filter="*"
                    >All</a>
                    <a
                        href="#"
                        class="gallery-filter transition2"
                        data-filter=".interior"
                    >Interior</a>
                    <a
                        href="#"
                        class="gallery-filter transition2"
                        data-filter=".construction"
                    >Construction</a>
                    <a
                        href="#"
                        class="gallery-filter transition2"
                        data-filter=".design"
                    >Design</a>
                    <a
                        href="#"
                        class="gallery-filter transition2"
                        data-filter=".houses"
                    >Houses</a>
                </div>
                <div class="clearfix"></div>
                <div class="filter-button">Filter</div>
                <div class="count-folio round-counter">
                    <div class="num-album"></div>
                    <div class="all-album"></div>
                </div>
            </div>
            <!-- filter end -->
            <!--=============== portfolio holder ===============-->
            <div class="resize-carousel-holder hpw">
                <div class="p_horizontal_wrap">
                    <div
                        id="portfolio_horizontal_container"
                        class="three-ver-columns"
                    >
                        <!-- portfolio item -->
                        <div class="portfolio_item interior design">
                            <img
                                src="{{ asset('images/folio/thumbs/1.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Quisque non augue</a></h3>
                                        <span>Photography / Web design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item houses design">
                            <img
                                src="{{ asset('images/folio/thumbs/2.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Nam gravida</a></h3>
                                        <span>Houses / interior</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item houses construction">
                            <img
                                src="{{ asset('images/folio/thumbs/3.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Curabitur bibendum</a></h3>
                                        <span>Design / Construction</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolioitem end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item construction">
                            <img
                                src="{{ asset('images/folio/thumbs/4.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Adipiscing elit</a></h3>
                                        <span>Houses / Interior</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item construction design">
                            <img
                                src="{{ asset('images/folio/thumbs/5.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Nam sagittis pretium</a></h3>
                                        <span>Wood / Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolioitem end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item houses interior">
                            <img
                                src="{{ asset('images/folio/thumbs/6.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Mauris lacinia</a></h3>
                                        <span>Photography / Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item interior design">
                            <img
                                src="{{ asset('images/folio/thumbs/7.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Nulla justo arcu</a></h3>
                                        <span>Photography / Houses</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item houses design">
                            <img
                                src="{{ asset('images/folio/thumbs/8.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Tincidunt ornare</a></h3>
                                        <span>Architecture / Constuction</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item houses design">
                            <img
                                src="{{ asset('images/folio/thumbs/9.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">lacus purus</a></h3>
                                        <span>Photography / Web design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item interior">
                            <img
                                src="{{ asset('images/folio/thumbs/10.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Phasellus nec</a></h3>
                                        <span>Photography / Architecture</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item   construction">
                            <img
                                src="{{ asset('images/folio/thumbs/11.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Efficitur urna</a></h3>
                                        <span>Architecture / Interior</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolioitem end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item interior construction">
                            <img
                                src="{{ asset('images/folio/thumbs/12.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Integer euismod</a></h3>
                                        <span>Photography / Architecture / Design </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item design construction">
                            <img
                                src="{{ asset('images/folio/thumbs/13.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">vitae odio</a></h3>
                                        <span>Photography / Construction</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item interior">
                            <img
                                src="{{ asset('images/folio/thumbs/14.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">condimentum ac sapien</a></h3>
                                        <span>Photography / Wood</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item interior construction">
                            <img
                                src="{{ asset('images/folio/thumbs/15.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Maecenas vitae semper</a></h3>
                                        <span>Photography / Interior </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item interior design houses">
                            <img
                                src="{{ asset('images/folio/thumbs/21.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Proin iaculis felis </a></h3>
                                        <span>Flat / Architecture</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item construction design">
                            <img
                                src="{{ asset('images/folio/thumbs/22.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Snap Group</a></h3>
                                        <span>Wood / Design /oroject managment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item interior construction houses">
                            <img
                                src="{{ asset('images/folio/thumbs/23.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Praesent imperdiet </a></h3>
                                        <span>Photography / Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item interior design houses">
                            <img
                                src="{{ asset('images/folio/thumbs/16.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Proin iaculis felis </a></h3>
                                        <span>Flat / Architecture</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item construction design">
                            <img
                                src="{{ asset('images/folio/thumbs/17.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Etiam pulvinar </a></h3>
                                        <span>Wood / Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item interior construction houses">
                            <img
                                src="{{ asset('images/folio/thumbs/27.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Praesent imperdiet </a></h3>
                                        <span>Photography / Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item construction">
                            <img
                                src="{{ asset('images/folio/thumbs/22.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">tincidunt egestas</a></h3>
                                        <span>Photography / Architecture</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item -->
                        <div class="portfolio_item construction">
                            <img
                                src="{{ asset('images/folio/thumbs/28.jpg') }}"
                                alt=""
                            >
                            <div class="port-desc-holder">
                                <div class="port-desc">
                                    <div class="grid-item">
                                        <h3><a href="{{ url('single-portfolio') }}">Mincidunt Fegestas</a></h3>
                                        <span>Interior / Architecture</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                    </div>
                    <!--portfolio_horizontal_container  end-->
                </div>
                <!--p_horizontal_wrap  end-->
            </div>
        </div>
        <!-- content end -->
        <!-- share  -->
        <div class="share-inner">
            <div
                class="share-container  isShare"
                data-share="['facebook','googleplus','twitter','linkedin']"
            ></div>
            <div class="close-share"></div>
        </div>
        <!-- share end -->
    </div>
    <!-- content-holder  end-->
@endsection
