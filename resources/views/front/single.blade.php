@extends('welcome')
@section('content')
    <!-- content-holder  -->
    <div class="content-holder">
        <!-- Page title -->
        <div class="dynamic-title">Boxed Gallery</div>
        <!-- Page title  end-->
        <!-- content  -->
        <div class="content">
            <section class="parallax-section">
                <div class="parallax-inner">
                    <div
                        class="bg"
                        data-bg="images/bg/177.jpg"
                        data-top-bottom="transform: translateY(300px);"
                        data-bottom-top="transform: translateY(-300px);"
                    ></div>
                    <div class="overlay"></div>
                </div>
                <div class="container">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Snap <strong> Group </strong></h2>
                            </div>
                            <div class="col-md-6">
                                <ul class="creat-list">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href={{ url('portfolio') }}">Portfolio</a></li>
                                    <li><a href="{{ url('single-portfolio') }}">Portfolio single</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content end -->
        <div class="content">
            <section>
                <div class="container">
                    <!--=============== portfolio holder ===============-->
                    <div class="gallery-items   three-columns grid-small-pad lightgallery">
                        <!-- 1 -->
                        <div class="gallery-item">
                            <div class="grid-item-holder">
                                <div class="box-item">
                                    <a
                                        data-src="{{ url('images/folio/thumbs/1.jpg') }}"
                                        class="popup-image"
                                        data-sub-html="alteration in some"
                                    >
                                        <span class="overlay"></span>
                                        <img
                                            src="{{ url('images/folio/thumbs/1.jpg') }}"
                                            alt=""
                                        >
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 1 end-->
                        <!-- 2 -->
                        <div class="gallery-item">
                            <div class="grid-item-holder">
                                <div class="box-item">
                                    <a
                                        data-src="{{ url('images/folio/thumbs/6.jpg') }}"
                                        class="popup-image"
                                        data-sub-html="majority have"
                                    >
                                        <span class="overlay"></span>
                                        <img
                                            src="{{ url('images/folio/thumbs/6.jpg') }}"
                                            alt=""
                                        >
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 2 end-->
                        <!-- 7 -->
                        <div class="gallery-item">
                            <div class="grid-item-holder">
                                <div class="box-item">
                                    <a
                                        data-src="{{ url('images/folio/thumbs/7.jpg') }}"
                                        class="popup-image"
                                        data-sub-html="All the Lorem Ipsum"
                                    >
                                        <span class="overlay"></span>
                                        <img
                                            src="{{ url('images/folio/thumbs/7.jpg') }}"
                                            alt=""
                                        >
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 7 end-->
                        <!-- 8 -->
                        <div class="gallery-item">
                            <div class="grid-item-holder">
                                <div class="box-item">
                                    <a
                                        data-src="{{ url('images/folio/thumbs/17.jpg') }}"
                                        class="popup-image"
                                        data-sub-html="repeat predefined chunks as necessary"
                                    >
                                        <span class="overlay"></span>
                                        <img
                                            src="{{ url('images/folio/thumbs/17.jpg') }}"
                                            alt=""
                                        >
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 8 end-->
                    </div>
                    <!-- end gallery items -->
                    <!-- custom-link-holder  end -->
                </div>
            </section>
        </div>
        <!-- content end -->
        <!-- content footer-->
        @include('layout.footer')
        <!-- content footer end -->
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
