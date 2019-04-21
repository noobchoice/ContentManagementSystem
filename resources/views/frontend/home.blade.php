@extends('layouts.frontend')



@section('content')

@include('frontend.includes.slider')

	<!-- Popular Course Start -->
        <section class="courses-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-left">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">Popular courses</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                <br /> aleration in some orm altime to share.</p>
                            <hr class="line" />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-4 mobi-mb-30">
                        <div class="course-box">
                            <div class="course-content plr-25">
                                <div class="thumb text-center">
                                    <a href="#"><img src="{{ asset('img/course/1.jpg') }}" alt="Thumbnail Image" /></a>
                                    <div class="price">
                                        <h3 class="no-margin"><span>$</span>30</h3>
                                    </div>
                                </div>
                                <a href="#">
                                    <h3 class="text-capitalize">Learn Photoshop 2017</h3>
                                </a>
                                <div class="date-comment clearfix">
                                    <div class="pull-left">
                                        <h6><span>Date: </span>15.6.17</h6>
                                    </div>
                                    <div class="pull-right">
                                        <h6><i class="zmdi zmdi-comments"></i> 20</h6>
                                    </div>
                                </div>
                                <p class="mb-20">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                                <a class="btn btn-1" href="#">Learn Now</a>
                            </div>
                            <div class="footer clearfix plr-25">
                                <div class="pull-left">
                                    <img class="pull-left" src="{{ asset('img/course/t1.png') }}" alt="Teacher Image" />
                                    <h5 class="no-margin">Mark Thomas</h5>
                                </div>
                                <div class="pull-right rating">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.course box end -->
                    <div class="col-xs-12 col-sm-4 mobi-mb-30">
                        <div class="course-box">
                            <div class="course-content plr-25">
                                <div class="thumb text-center">
                                    <a href="#"><img src="{{ asset('img/course/2.jpg') }}" alt="Thumbnail Image" /></a>
                                    <div class="price">
                                        <h3 class="no-margin"><span>$</span>40</h3>
                                    </div>
                                </div>
                                <a href="#">
                                    <h3 class="text-capitalize">Learn App Design 2017</h3>
                                </a>
                                <div class="date-comment clearfix">
                                    <div class="pull-left">
                                        <h6><span>Date: </span>15.6.17</h6>
                                    </div>
                                    <div class="pull-right">
                                        <h6><i class="zmdi zmdi-comments"></i> 20</h6>
                                    </div>
                                </div>
                                <p class="mb-20">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                                <a class="btn btn-1" href="#">Learn Now</a>
                            </div>
                            <div class="footer clearfix plr-25">
                                <div class="pull-left">
                                    <img class="pull-left" src="{{ asset('img/course/t7.png') }}" alt="Teacher Image" />
                                    <h5 class="no-margin">Jacob Wright</h5>
                                </div>
                                <div class="pull-right rating">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.course box end -->
                    <div class="col-xs-12 col-sm-4">
                        <div class="course-box">
                            <div class="course-content plr-25">
                                <div class="thumb text-center">
                                    <a href="#"><img src="{{ asset('img/course/3.jpg') }}" alt="Thumbnail Image" /></a>
                                    <div class="price">
                                        <h3 class="no-margin"><span>$</span>18</h3>
                                    </div>
                                </div>
                                <a href="#">
                                    <h3 class="text-capitalize">Learn App Design</h3>
                                </a>
                                <div class="date-comment clearfix">
                                    <div class="pull-left">
                                        <h6><span>Date: </span>15.6.17</h6>
                                    </div>
                                    <div class="pull-right">
                                        <h6><i class="zmdi zmdi-comments"></i> 20</h6>
                                    </div>
                                </div>
                                <p class="mb-20">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                                <a class="btn btn-1" href="#">Learn Now</a>
                            </div>
                            <div class="footer clearfix plr-25">
                                <div class="pull-left">
                                    <img class="pull-left" src="{{ asset('img/course/t8.png') }}" alt="Teacher Image" />
                                    <h5 class="no-margin">Frank Harper</h5>
                                </div>
                                <div class="pull-right rating">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.course box end -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 text-center pt-60">
                        <div class="all-course d-block">
                            <a class="btn" href="#">All Courses</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Popular Course End -->

        <!-- Sign Up Online Start -->
        <section class="signup-area ptb-70 bg-img-1 parallax overlay overlay-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="countdown-text pt-80">
                            <h3 class="mb-5 white-color">GET THE COACHING TRAINING</h3>
                            <h2 class="mb-30 white-color">BY James Russell For online</h2>
                            <div id="timer">
                                <div id="days"></div>
                                <div id="hours"></div>
                                <div id="minutes"></div>
                                <div id="seconds"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="signup-form custom-input white-bg">
                            <h3 class="mb-20">Sign Up Now</h3>
                            <form action="javascript:viod(0)">
                                <input type="text" name="name" placeholder="Your Name" required />
                                <input type="email" name="email" placeholder="Email" required />
                                <input type="text" name="phone" placeholder="Phone" />
                                <button type="submit" class="btn">Get It Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Sign Up Online End -->

        <!-- Event Section Start -->
        <section class="event-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-left">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">Our Events</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                <br /> aleration in some orm altime to share.</p>
                            <hr class="line" />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 mobi-mb-30">
                        <div class="event-box d-flex">
                            <div class="thumb pull-left">
                                <a href="#"><img src="{{ asset('img/event/style1/3.jpg') }}" alt="Thumbnail Image" /></a>
                                <div class="date">
                                    <h2 class="mb-3">12</h2>
                                    <h5 class="no-margin">jun</h5>
                                </div>
                            </div>
                            <div class="event-content">
                                <div class="align-container">
                                    <div class="align-inner">
                                        <a href="#">
                                            <h4 class="text-capitalize">Workshop UI Design</h4>
                                        </a>
                                        <ul>
                                            <li><i class="zmdi zmdi-time"></i> 5.00 pm - 8.00 pm</li>
                                            <li><i class="zmdi zmdi-pin"></i> Melborn, Australia</li>
                                        </ul>
                                        <p>On the other hand, we denou with
                                            <br/> righteous indignation and dislmen
                                            <br /> who are so beguiled and.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.event box end -->
                    <div class="col-xs-12 col-sm-6">
                        <div class="event-box d-flex">
                            <div class="thumb pull-left">
                                <a href="#"><img src="{{ asset('img/event/style1/7.jpg') }}" alt="Thumbnail Image" /></a>
                                <div class="date">
                                    <h2 class="mb-3">12</h2>
                                    <h5 class="no-margin">jun</h5>
                                </div>
                            </div>
                            <div class="event-content">
                                <div class="align-container">
                                    <div class="align-inner">
                                        <a href="#">
                                            <h4 class="text-capitalize">Photo Effect Tutorials</h4>
                                        </a>
                                        <ul>
                                            <li><i class="zmdi zmdi-time"></i> 5.00 pm - 8.00 pm</li>
                                            <li><i class="zmdi zmdi-pin"></i> Melborn, Australia</li>
                                        </ul>
                                        <p>On the other hand, we denou with
                                            <br/> righteous indignation and dislmen
                                            <br /> who are so beguiled and.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.event box end -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 text-center pt-60">
                        <div class="all-event d-block">
                            <a class="btn" href="#">All Events</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Event Section End -->

        <!-- Fun Facts Start -->
        <section class="fun-facts-area ptb-150 bg-img-2 parallax overlay dark-3">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50 tab-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="{{ asset('img/icons/facts/1.png') }}" alt="Icon" />
                            <h1><span class="counter theme-color">75</span></h1>
                            <h5 class="no-margin">Teachers</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50 tab-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="{{ asset('img/icons/facts/2.png') }}" alt="Icon" />
                            <h1><span class="counter theme-color">1200</span></h1>
                            <h5 class="no-margin">Classes complete</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="{{ asset('img/icons/facts/3.png') }}" alt="Icon" />
                            <h1><span class="counter theme-color">120</span></h1>
                            <h5 class="no-margin">all courses</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-func">
                            <img class="mb-25" src="{{ asset('img/icons/facts/4.png') }}" alt="Icon" />
                            <h1><span class="counter theme-color">1200</span></h1>
                            <h5 class="no-margin">Students enrolled</h5>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Fun Facts End -->

        <!-- Testimonial Section Start -->
        <section class="testimonial-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">What people say</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                <br /> aleration in some orm altime to share.</p>
                            <hr class="line" />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div id="testimonial" class="text-center">
                <div class="slide-item">
                    <div class="say-box ptb-30 white-bg">
                        <img src="{{ asset('img/icons/4.png') }}" alt="Icon" />
                        <p class="mb-20">All the Lorem Ipsum generators on the Internet tend
                            <br /> repeat predefined chunks as necessary, making this the first true geerator on</p>
                        <h4 class="theme-color mb-5">Gary Black</h4>
                        <h6 class="on-margin">UX Designer</h6>
                    </div>
                </div>
                <!-- /.Item end -->
                <div class="slide-item">
                    <div class="say-box ptb-30 white-bg">
                        <img src="{{ asset('img/icons/4.png') }}" alt="Icon" />
                        <p class="mb-20">All the Lorem Ipsum generators on the Internet tend
                            <br /> repeat predefined chunks as necessary, making this the first true geerator on</p>
                        <h4 class="theme-color mb-5">Gary Black</h4>
                        <h6 class="on-margin">UX Designer</h6>
                    </div>
                </div>
                <!-- /.Item end -->
                <div class="slide-item">
                    <div class="say-box ptb-30 white-bg">
                        <img src="{{ asset('img/icons/4.png') }}" alt="Icon" />
                        <p class="mb-20">All the Lorem Ipsum generators on the Internet tend
                            <br /> repeat predefined chunks as necessary, making this the first true geerator on</p>
                        <h4 class="theme-color mb-5">Gary Black</h4>
                        <h6 class="on-margin">UX Designer</h6>
                    </div>
                </div>
                <!-- /.Item end -->
            </div>
        </section>
        <!-- Testimonial Section End -->

        <!-- Promo Section Start -->
        <section class="promo-area ptb-110 light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">Get In Touch With Us</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                <br /> aleration in some orm altime to share.</p>
                            <hr class="line" />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="subscribe">
                            <form id="mc-form" class="custom-input subscribe_form">
                                <input type="email" name="email" id="mc-email" placeholder="Your Email Here" required>
                                <button class="btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Promo Section End -->

        <!-- Blog Section Start -->
        <section class="blog-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-left">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">Latest Blog News</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                <br /> aleration in some orm altime to share.</p>
                            <hr class="line" />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-4 mobi-mb-30">
                        <div class="blog-post">
                            <div class="thumb text-center">
                                <a href="blog-details.html"><img src="{{ asset('img/blog/1.jpg') }}" alt="Thumbnail Image" /></a>
                            </div>
                            <div class="blog-content ptb-30 plr-35">
                                <div class="date-box clearfix mb-20">
                                    <h4 class="theme-color pull-left no-margin">20 <span>jun</span></h4>
                                    <div class="name-comment pl-15">
                                        <h5 class=" mb-5"><span class="theme-color">By:</span> Mark Thomas</h5>
                                        <h5 class="no-margin"><span class="theme-color">Comment:</span> 20</h5>
                                    </div>
                                </div>
                                <a href="blog-details.html">
                                    <h3 class="text-capitalize">All The Lorem Ipsum Rock</h3>
                                </a>
                                <p>There are many variations of ages oIpsum available, but the mrity ave suffered ation in some orm altime to.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.Blog Post end -->
                    <div class="col-xs-12 col-sm-4 mobi-mb-30">
                        <div class="blog-post">
                            <div class="thumb text-center">
                                <a href="blog-details.html"><img src="{{ asset('img/blog/2.jpg') }}" alt="Thumbnail Image" /></a>
                            </div>
                            <div class="blog-content ptb-30 plr-35">
                                <div class="date-box clearfix mb-20">
                                    <h4 class="theme-color pull-left no-margin">21 <span>jun</span></h4>
                                    <div class="name-comment pl-15">
                                        <h5 class=" mb-5"><span class="theme-color">By:</span> Mark Thomas</h5>
                                        <h5 class="no-margin"><span class="theme-color">Comment:</span> 22</h5>
                                    </div>
                                </div>
                                <a href="blog-details.html">
                                    <h3 class="text-capitalize">The mrity ave suffered mity</h3>
                                </a>
                                <p>There are many variations of ages oIpsum available, but the mrity ave suffered ation in some orm altime to.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.Blog Post end -->
                    <div class="col-xs-12 col-sm-4">
                        <div class="blog-post">
                            <div class="thumb text-center">
                                <a href="blog-details.html"><img src="{{ asset('img/blog/3.jpg') }}" alt="Thumbnail Image" /></a>
                            </div>
                            <div class="blog-content ptb-30 plr-35">
                                <div class="date-box clearfix mb-20">
                                    <h4 class="theme-color pull-left no-margin">10 <span>jun</span></h4>
                                    <div class="name-comment pl-15">
                                        <h5 class=" mb-5"><span class="theme-color">By:</span> Mark Thomas</h5>
                                        <h5 class="no-margin"><span class="theme-color">Comment:</span> 10</h5>
                                    </div>
                                </div>
                                <a href="blog-details.html">
                                    <h3 class="text-capitalize">Finibus Bonorum et Malum</h3>
                                </a>
                                <p>There are many variations of ages oIpsum available, but the mrity ave suffered ation in some orm altime to.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.Blog Post end -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Blog Section End -->


@endsection