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
                    {{-- @php
                        $firstImage = \Illuminate\Support\Arr::first($portfolio->images);
                    @endphp --}}
                    <div
                        class="bg"
                        data-bg="{{ asset('upload/Property/background/' . $portfolio->bg) }}"
                        data-top-bottom="transform: translateY(300px);"
                        data-bottom-top="transform: translateY(-300px);"
                    ></div>
                    <div class="overlay"></div>
                </div>
                <div class="container">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h2> <strong> {{ $portfolio->name }} </strong></h2>
                            </div>
                            <div class="col-md-6">
                                <ul class="creat-list">
                                    <li><a href="">{{ $portfolio->category->name }}</a></li>
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
                        @if (is_array($portfolio->images) || is_object($portfolio->images))
                            @foreach ($portfolio->images as $key => $imagee)
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <a
                                                data-src="{{ asset('upload/Property/' . $imagee) }}"
                                                class="popup-image"
                                                data-sub-html="alteration in some"
                                            >
                                                <span class="overlay"></span>
                                                <img
                                                    src="{{ asset('upload/Property/' . $imagee) }}"
                                                    alt=""
                                                >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="gallery-item">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <a
                                            data-src="{{ asset('upload/Property/' . $imagee) }}"
                                            class="popup-image"
                                            data-sub-html="alteration in some"
                                        >
                                            <span class="overlay"></span>
                                            <img
                                                src="{{ asset('upload/Property/' . $imagee) }}"
                                                alt=""
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="custom-inner-holder">
                        <!-- 1 -->
                        <div class="custom-inner">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Location : {{ $portfolio->location }}</h3>
                                </div>
                                <div
                                    class="carousel-indicators col-md-8"
                                    style="margin-left: 40% ;margin-top: 5%;"
                                >
                                    <a
                                        href="{{ url('portfolios') }}"
                                        class=" text-link"
                                    >Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- 1 -->
                    </div>
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
