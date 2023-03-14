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
                    <h2> 5M Design Studio</h2>
                    <h3></h3>
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
        <!-- content  -->

        <!-- content end -->
        <div class="content">

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
                            <h2
                                class="section-title"
                                style="color:rgb(255, 255, 255)"
                            >Some Interisting <strong> Facts</strong></h2>
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
                                        <li><a href="#">Residential spaces</a></li>
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
                                        <h3><strong>Residential spaces</strong></h3>
                                        <a
                                            href="{{ url('portfolio') }}"
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
                                        <li><a href="#">Commercial spaces</a></li>
                                        <li><a href="#">Furneture Work</a></li>
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
                                        <h3><strong>Office Work</strong></h3>
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
                                        <li><a href="#">Hospitality spaces</a></li>
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
                                        <h3><strong>Bar & Restourant</strong></h3>
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
                    <!-- 4 -->
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-7">
                            <div class="parallax-item right-direction">
                                <div class="paralax-media">
                                    <ul class="creat-list">
                                        <li><a href="#">Hospitality Space</a></li>
                                    </ul>
                                    <div class="paralax-wrap">
                                        <img
                                            src="{{ asset('images/folio/thumbs/4.jpg') }}"
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
                                        <h3><strong>Caffee</strong></h3>
                                        <a
                                            href="{{ url('portfolio') }}"
                                            class="btn anim-button fl-l"
                                        ><span>View Project</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 end-->
                    <!-- custom-link-holder  -->
                    <div class="custom-link-holder">
                        <a
                            href="{{ url('portfolio') }}"
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
        <div class="content dark-bg">
            <!-- parallax image  -->
            <div class="parallax-inner">
                <div
                    class="bg"
                    data-bg="images/bg/17.jpg"
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
                            <h2 class="section-title">Our partners <strong> and Clients</strong></h2>
                        </div>
                        <div class="col-md-8">
                            <p>Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations. All our projects incorporate a unique artistic image and functional solutions. Client is the soul of the project. Our
                                main goal is to illustrate his/hers values and individuality through design.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <!-- facts   -->
                            <div class="clients-list">
                                <a
                                    href="#"
                                    target="_blank"
                                ><img
                                        src="images/clients/1.png"
                                        alt=""
                                    ></a>
                                <a
                                    href="#"
                                    target="_blank"
                                ><img
                                        src="images/clients/2.png"
                                        alt=""
                                    ></a>
                                <a
                                    href="#"
                                    target="_blank"
                                ><img
                                        src="images/clients/3.png"
                                        alt=""
                                    ></a>
                                <a
                                    href="#"
                                    target="_blank"
                                ><img
                                        src="images/clients/4.png"
                                        alt=""
                                    ></a>
                                <a
                                    href="#"
                                    target="_blank"
                                ><img
                                        src="images/clients/5.png"
                                        alt=""
                                    ></a>
                            </div>
                            <!-- facts   end -->
                        </div>
                    </div>
                </div>
                <!--  container  end -->
            </section>
        </div>
        <!-- content  -->
        <div
            class="content"
            id="sec6"
        >
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="section-title">What <strong>We Do </strong></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                                there isn't anything embarrassing hidden in the middle of text. </p>
                        </div>
                    </div>
                    <div class="services-holder">
                        <!-- 1 -->
                        <a
                            class="serv-item"
                            href="#ser1"
                        >
                            <div class="serv-item-inner">
                                <img
                                    src="images/folio/thumbs/3.jpg"
                                    alt=""
                                >
                                <div class="ser-title">
                                    <h3>Interior</h3>
                                </div>
                            </div>
                        </a>
                        <!-- 1 end-->
                        <!-- 2 -->
                        <a
                            class="serv-item"
                            href="#ser2"
                        >
                            <div class="serv-item-inner">
                                <img
                                    src="images/folio/thumbs/14.jpg"
                                    alt=""
                                >
                                <div class="ser-title">
                                    <h3>Construction</h3>
                                </div>
                            </div>
                        </a>
                        <!-- 2 end -->
                        <!-- 3 -->
                        <a
                            class="serv-item"
                            href="#ser3"
                        >
                            <div class="serv-item-inner">
                                <img
                                    src="images/folio/thumbs/1.jpg"
                                    alt=""
                                >
                                <div class="ser-title">
                                    <h3>Architecture</h3>
                                </div>
                            </div>
                        </a>
                        <!-- 3 end -->
                        <!-- 4 -->
                        <a
                            class="serv-item"
                            href="#ser4"
                        >
                            <div class="serv-item-inner">
                                <img
                                    src="images/folio/thumbs/4.jpg"
                                    alt=""
                                >
                                <div class="ser-title">
                                    <h3>Visualization</h3>
                                </div>
                            </div>
                        </a>
                        <!-- 4 end-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- serv-post  -->
                            <div class="serv-post">
                                <!-- 1 -->
                                <div
                                    id="ser1"
                                    class="serv-details"
                                >
                                    <h3>Interior</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                                        be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    <ul class="ser-list">
                                        <li>Curabitur mi sem</li>
                                        <li>Euismod in velit</li>
                                        <li>Proin eu felis hendrerit</li>
                                    </ul>
                                    <span class="price">1200$-5000$</span>
                                </div>
                                <!-- 1 end -->
                                <!-- 2 -->
                                <div
                                    id="ser2"
                                    class="serv-details"
                                >
                                    <h3>Construction</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                                        be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                                        be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    <ul class="ser-list">
                                        <li>Curabitur mi sem</li>
                                        <li>Euismod in velit</li>
                                        <li>Proin eu felis hendrerit</li>
                                    </ul>
                                    <span class="price">3200$-8800$</span>
                                </div>
                                <!-- 2 end -->
                                <!-- 3 -->
                                <div
                                    id="ser3"
                                    class="serv-details"
                                >
                                    <h3>Architecture</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                                        be sure there isn't anything embarrassing hidden in the middle of text. You need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. You need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    <ul class="ser-list">
                                        <li>Architecture</li>
                                        <li>Euismod in velit</li>
                                        <li>Proin eu felis hendrerit</li>
                                    </ul>
                                    <span class="price">12300$-53000$</span>
                                </div>
                                <!-- 3 end -->
                                <!-- 4 -->
                                <div
                                    id="ser4"
                                    class="serv-details"
                                >
                                    <h3>Visualization</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                                        be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    <p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    <ul class="ser-list">
                                        <li>Curabitur mi sem</li>
                                        <li>Euismod in velit</li>
                                        <li>Proin eu felis hendrerit</li>
                                    </ul>
                                    <span class="price">3200$-6500$</span>
                                </div>
                                <!-- 4 end -->
                            </div>
                            <!-- serv-post end-->
                        </div>
                        <div class="col-md-6"></div>
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
