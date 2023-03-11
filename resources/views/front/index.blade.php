@extends('welcome')
@section('content')
    <!-- content-holder  -->
    <div class="content-holder">
        <!-- Page title -->
        <div class="dynamic-title">Home Image</div>
        <!-- Page title  end-->
        <!-- content  -->
        <div class="content full-height">
            <!-- Hero section   -->
            <div class="hero-wrap">
                <!-- Hero image   -->
                <div
                    class="bg"
                    data-bg="{{ asset('images/bg/17.jpg') }}"
                    data-top-bottom="transform: translateY(300px);"
                    data-bottom-top="transform: translateY(-300px);"
                ></div>
                <!-- Hero image   end -->
                <div class="overlay"></div>
                <!-- Hero text   -->
                <div class="hero-wrap-item center-item">
                    <h2> Monolit Studio</h2>
                    <h3>Architecture</h3>
                </div>
                <!-- Hero text   end-->
                <a
                    href="#sec1"
                    class="hero-scroll-link custom-scroll-link"
                    data-top-bottom="transform: translateY(50px);"
                    data-bottom-top="transform: translateY(-50px);"
                ><i class="fa fa-angle-down"></i></a>
            </div>
            <!-- Hero section   end -->
        </div>
        <!-- content end -->
        <!-- content  -->
        <div class="content">
            <section id="sec1">
                <!-- section number   -->
                <div
                    class="sect-subtitle right-align-dec"
                    data-top-bottom="transform: translateY(200px);"
                    data-bottom-top="transform: translateY(-200px);"
                ><span>01</span></div>
                <!-- section number  end  -->
                <!--  container  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- single slider  -->
                            <div class="parallax-box slider-box ">
                                <div class="single-slider-holder">
                                    <div class="single-slider">
                                        <!-- 1 -->
                                        <div class="item">
                                            <img
                                                src="{{ asset('images/folio/slider/3.jpg') }}"
                                                alt=""
                                            >
                                        </div>
                                        <!-- 1 end-->
                                        <!-- 2 -->
                                        <div class="item">
                                            <img
                                                src="{{ asset('images/folio/slider/2.jpg') }}"
                                                alt=""
                                            >
                                        </div>
                                        <!-- 2 end-->
                                        <!-- 3 -->
                                        <div class="item">
                                            <img
                                                src="{{ asset('images/folio/slider/1.jpg') }}"
                                                alt=""
                                            >
                                        </div>
                                        <!-- 3 end  -->
                                    </div>
                                    <div class="customNavigation ssn">
                                        <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                        <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <!-- single slider  end -->
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-title">Mussie<strong> Mengistu</strong></h2>
                            <p>
                                As an architect and interior designer, I possess a keen eye for design and an unwavering commitment to quality. With years of experience in
                                the field, I have developed a deep understanding of the intricate relationship between form and function, and I am dedicated to creating spaces
                                that are not only beautiful but also functional and efficient. I am adept at managing complex projects and collaborating with clients to ensure
                                that their vision is realized. My attention to detail, ability to think creatively, and commitment to excellence are qualities that have served
                                me well in my career, and I am confident that they will continue to do so in the future.
                            </p>
                            <div class="process-box">
                                <h3>Design Services</h3>
                                <ul class="creat-list">
                                    <li><a href="#">Interior Design</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Furniture & Finishing Work</a></li>
                                </ul>
                            </div>
                            <h3 class="bold-title">Skills</h3>
                            <div class="skillbar-box animaper">
                                <!-- skill 1-->
                                <div class="custom-skillbar-title"><span>Photoshop</span></div>
                                <div class="skill-bar-percent">95%</div>
                                <div
                                    class="skillbar-bg"
                                    data-percent="95%"
                                >
                                    <div class="custom-skillbar"></div>
                                </div>
                                <!-- skill 2-->
                                <div class="custom-skillbar-title"><span>Illustrator</span></div>
                                <div class="skill-bar-percent">65%</div>
                                <div
                                    class="skillbar-bg"
                                    data-percent="65%"
                                >
                                    <div class="custom-skillbar"></div>
                                </div>
                                <!-- skill 3-->
                                <div class="custom-skillbar-title"><span>3D MAX</span></div>
                                <div class="skill-bar-percent">75%</div>
                                <div
                                    class="skillbar-bg"
                                    data-percent="75%"
                                >
                                    <div class="custom-skillbar"></div>
                                </div>
                                <div class="custom-skillbar-title"><span>Cost Brakedown</span></div>
                                <div class="skill-bar-percent">88%</div>
                                <div
                                    class="skillbar-bg"
                                    data-percent="88%"
                                >
                                    <div class="custom-skillbar"></div>
                                </div>
                                <div class="custom-skillbar-title"><span>Project Managment</span></div>
                                <div class="skill-bar-percent">97%</div>
                                <div
                                    class="skillbar-bg"
                                    data-percent="97%"
                                >
                                    <div class="custom-skillbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  container end  -->
            </section>
        </div>
        <!-- content  end  -->
        <!-- content   -->
        <div class="content dark-bg">
            <!-- section number   -->
            <div
                class="sect-subtitle left-align-dec"
                data-top-bottom="transform: translateY(-200px);"
                data-bottom-top="transform: translateY(200px);"
            ><span>02</span></div>
            <!-- section number   end -->
            <!-- parallax image  -->
            <div class="parallax-inner">
                <div
                    class="bg"
                    data-bg="{{ asset('images/bg/17.jpg') }}"
                    data-top-bottom="transform: translateY(300px);"
                    data-bottom-top="transform: translateY(-300px);"
                ></div>
                <div class="overlay"></div>
            </div>
            <!-- parallax image  end -->
            <section>
                <!--  container  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="section-title">Some Interisting <strong> Facts</strong></h2>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <!-- facts   -->
                            <div class="inline-facts-holder row">
                                <!-- 1 -->
                                <div class="inline-facts col-md-4 ">
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div
                                                class="num"
                                                data-content="461"
                                                data-num="461"
                                            >0</div>
                                        </div>
                                    </div>
                                    <h6>Finished projects</h6>
                                </div>
                                <!-- 3 -->
                                <div class="inline-facts col-md-4">
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div
                                                class="num"
                                                data-content="168"
                                                data-num="168"
                                            >0</div>
                                        </div>
                                    </div>
                                    <h6>Happy customers</h6>
                                </div>
                                <!-- 3 -->
                                <div class="inline-facts col-md-4">
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div
                                                class="num"
                                                data-content="222"
                                                data-num="222"
                                            >0</div>
                                        </div>
                                    </div>
                                    <h6>Working hours</h6>
                                </div>
                            </div>
                            <!-- facts   end -->
                        </div>
                    </div>
                </div>
                <!--  container  end -->
            </section>
        </div>
        <!-- content  end  -->
        <!-- content   -->
        <div class="content">
            <section>
                <!-- section number     -->
                <div
                    class="sect-subtitle right-align-dec"
                    data-top-bottom="transform: translateY(200px);"
                    data-bottom-top="transform: translateY(-200px);"
                ><span>03</span></div>
                <!-- section number   end -->
                <!--  container  -->
                <div class="container">
                    <!--  section title -->
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title algn-right dec-title"><span>Our featured <strong> Works</strong></span></h2>
                        </div>
                    </div>
                    <!--  section title end  -->
                    <!--  Parallax items  -->
                    <!-- 1 -->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="parallax-item left-direction">
                                <div class="paralax-media">
                                    <ul class="creat-list">
                                        <li><a href="#">Houses</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Skyscraper</a></li>
                                    </ul>
                                    <div class="paralax-wrap">
                                        <img
                                            src="{{ asset('images/folio/thumbs/14.jpg') }}"
                                            class="respimg"
                                            alt=""
                                        >
                                    </div>
                                </div>
                                <div
                                    class="parallax-deck"
                                    data-top-bottom="transform: translateY(-200px);"
                                    data-bottom-top="transform: translateY(200px);"
                                >
                                    <div class="parallax-deck-item">
                                        <h3>Sed ut perspiciatis <strong>unde this</strong></h3>
                                        <a
                                            href="portfolio-single.html"
                                            class="btn anim-button fl-l"
                                        ><span>View Project</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                    <!-- 1 end-->
                    <!-- 2 -->
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-7">
                            <div class="parallax-item right-direction">
                                <div class="paralax-media">
                                    <ul class="creat-list">
                                        <li><a href="#">Interior</a></li>
                                        <li><a href="#">Wood</a></li>
                                    </ul>
                                    <div class="paralax-wrap">
                                        <img
                                            src="{{ asset('images/folio/thumbs/17.jpg') }}"
                                            class="respimg"
                                            alt=""
                                        >
                                    </div>
                                </div>
                                <div
                                    class="parallax-deck"
                                    data-top-bottom="transform: translateY(-200px);"
                                    data-bottom-top="transform: translateY(200px);"
                                >
                                    <div class="parallax-deck-item">
                                        <h3>Sed ut perspiciatis <strong>unde this</strong></h3>
                                        <a
                                            href="portfolio-single.html"
                                            class="btn anim-button fl-l"
                                        ><span>View Project</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 end-->
                    <!-- 3 -->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="parallax-item left-direction">
                                <div class="paralax-media">
                                    <ul class="creat-list">
                                        <li><a href="#">Houses</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Skyscraper</a></li>
                                    </ul>
                                    <div class="paralax-wrap">
                                        <img
                                            src="{{ asset('images/folio/thumbs/3.jpg') }}"
                                            class="respimg"
                                            alt=""
                                        >
                                    </div>
                                </div>
                                <div
                                    class="parallax-deck"
                                    data-top-bottom="transform: translateY(-200px);"
                                    data-bottom-top="transform: translateY(200px);"
                                >
                                    <div class="parallax-deck-item">
                                        <h3>Sed ut perspiciatis <strong>unde this</strong></h3>
                                        <a
                                            href="portfolio-single.html"
                                            class="btn anim-button fl-l"
                                        ><span>View Project</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                    <!-- 3 end-->
                    <!-- custom-link-holder  -->
                    <div class="custom-link-holder">
                        <a
                            href="portfolio.html"
                            class="btn anim-button"
                            data-top-bottom="transform: translateY(-50px);"
                            data-bottom-top="transform: translateY(50px);"
                        ><span>View All Projects</span><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <!-- custom-link-holder  end -->
                </div>
                <!--  container  end -->
            </section>
        </div>
        <!-- content end -->
        <!-- content footer-->
        <div class="height-emulator"></div>
        <footer class="content-footer">
            <!--  container  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Footer logo -->
                        <div class="footer-item footer-logo">
                            <a
                                href="index.html"
                                class="ajax"
                            ><img
                                    src="{{ asset('images/footer-logo.png') }}"
                                    alt=""
                                ></a>
                            <p>Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations.Client is the soul of the project. </p>
                        </div>
                        <!-- Footer logo end -->
                    </div>
                    <!-- Footer info -->
                    <div class="col-md-2">
                        <div class="footer-item">
                            <h4 class="text-link">Call</h4>
                            <ul>
                                <li><a href="#">+7(111)123456789</a></li>
                                <li><a href="#">+1(000)987654321</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer info end-->
                    <!-- Footer info -->
                    <div class="col-md-2">
                        <div class="footer-item">
                            <h4 class="text-link">Write</h4>
                            <ul>
                                <li><a href="#">yourmail@domain.com</a></li>
                                <li><a href="#">email@website.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer info-->
                    <!-- Footer info end-->
                    <div class="col-md-2">
                        <div class="footer-item">
                            <h4 class="text-link">Visit</h4>
                            <ul>
                                <li><span>USA 27TH BROOKLYN NY</span></li>
                                <li> <a
                                        href="#"
                                        target="_blank"
                                    >View on map</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer info end-->
                </div>
                <!-- Footer copyright -->
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="footer-wrap">
                            <span class="copyright"> &#169; Monolit 2016. All rights reserved.
                            </span>
                            <span class="to-top">To Top</span>
                        </div>
                    </div>
                </div>
                <!-- Footer copyright end -->
            </div>
            <!--  container  end -->
            <!-- Hover animation  -->
            <canvas class="particular"></canvas>
            <!-- Hover animation  end -->
        </footer>
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
