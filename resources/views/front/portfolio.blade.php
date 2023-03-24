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
                    @foreach ($categories as $category)
                        <a
                            href="#"
                            class="gallery-filter transition2"
                            data-filter=".{{ $category->slug }}"
                        >{{ $category->name }}</a>
                    @endforeach
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
                        @foreach ($portfolios as $item)
                            <div class="portfolio_item interior design">
                                @if (is_array($item->images) || is_object($item->images))
                                    @php
                                        $firstImage = \Illuminate\Support\Arr::first($item->images);
                                    @endphp
                                    <img
                                        src="{{ asset('upload/Property/' . $firstImage) }}"
                                        alt=""
                                    >
                                @endif
                                <div class="port-desc-holder">
                                    <div class="port-desc">
                                        <div class="grid-item">
                                            <h3><a href="{{ url('single-portfolio/' . $item->id) }}">{{ $item->name }}</a></h3>
                                            <span>{{ $item->category->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
