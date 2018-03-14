@extends('layouts.app')

@section('content')
<!-- homeslide start -->
<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
        @foreach ($homeslides as $homeslide)
        <li style="background-image: url(/storage/{{$homeslide->image}});">
            <div class="overlay-gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center slider-text">
                        <div class="slider-text-inner">
                            <h1>{{$homeslide->title}}</h1>
                                <h2>{{$homeslide->brief}}</h2>
                                <p><a class="btn btn-primary btn-lg" href="{{$homeslide->link}}" target="_blank">{{$homeslide->linktitle}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach		   	
        </ul>
    </div>
</aside>
<!-- homeslide end -->

<!-- services start -->
<div id="fh5co-course-categories">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Services</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <a href="{{$service->path()}}">
                        <span class="icon">
                            <i class="{{$service->icon}}"></i>
                        </span>
                    </a>
                    <div class="desc">
                        <a href="{{$service->path()}}"><h3>{{$service->title}}</a></h3></a>
                        <p>{{$service->notes}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services end -->

<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-world"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Foreign Followers</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-study"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Students Enrolled</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-bulb"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Classes Complete</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-head"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Certified Teachers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-course">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Our Course</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 animate-box">
                <div class="course">
                    <a href="#" class="course-img" style="background-image: url(images/project-1.jpg);">
                    </a>
                    <div class="desc">
                        <h3><a href="#">Web Master</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="course">
                    <a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
                    </a>
                    <div class="desc">
                        <h3><a href="#">Business &amp; Accounting</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="course">
                    <a href="#" class="course-img" style="background-image: url(images/project-3.jpg);">
                    </a>
                    <div class="desc">
                        <h3><a href="#">Science &amp; Technology</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="course">
                    <a href="#" class="course-img" style="background-image: url(images/project-4.jpg);">
                    </a>
                    <div class="desc">
                        <h3><a href="#">Health &amp; Psychology</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- recommendations start -->
<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2><span>Testimonials</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row animate-box">
                    <div class="owl-carousel owl-carousel-fullwidth">
                        @foreach ($recommendations as $recommendation)
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <div class="user" style="background-image: url(/storage/{{$recommendation->image}});"></div>
                                <span>{{$recommendation->name}}<br><small>{{$recommendation->role}}</small></span>
                                <blockquote>
                                    <p>&ldquo;{{$recommendation->comments}}&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- recommendations end -->

<div id="fh5co-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Blog &amp; Events</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row row-padded-mb">
            <div class="col-md-4 animate-box">
                <div class="fh5co-event">
                    <div class="date text-center"><span>15<br>Mar.</span></div>
                    <h3><a href="#">USA, International Triathlon Event</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="fh5co-event">
                    <div class="date text-center"><span>15<br>Mar.</span></div>
                    <h3><a href="#">USA, International Triathlon Event</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="fh5co-event">
                    <div class="date text-center"><span>15<br>Mar.</span></div>
                    <h3><a href="#">New Device Develope by Microsoft</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(images/project-1.jpg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(images/project-2.jpg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(images/project-3.jpg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-pricing" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Plan &amp; Pricing</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            <div class="pricing pricing--rabten">
                <div class="col-md-4 animate-box">
                    <div class="pricing__item">
                        <div class="wrap-price">
                            <!-- <div class="icon icon-user2"></div> -->
                    <h3 class="pricing__title">Trial</h3>
                    <!-- <p class="pricing__sentence">Single user license</p> -->
                        </div>
                <div class="pricing__price">
                    <span class="pricing__anim pricing__anim--1">
                            <span class="pricing__currency">$</span>0
                    </span>
                    <span class="pricing__anim pricing__anim--2">
                            <span class="pricing__period">per year</span>
                    </span>
                </div>
                <div class="wrap-price">
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">One Day Trial</li>
                        <li class="pricing__feature">Limited Courses</li>
                        <li class="pricing__feature">Free 3 Lessons</li>
                        <li class="pricing__feature">No Supporter</li>
                        <li class="pricing__feature">No Tutorial</li>
                        <li class="pricing__feature">No Ebook</li>
                        <li class="pricing__feature">Limited Registered User</li>
                    </ul>
                    <button class="pricing__action">Choose plan</button>
                </div>
            </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="pricing__item">
                        <div class="wrap-price">
                            <!-- <div class="icon icon-store"></div> -->
                    <h3 class="pricing__title">Silver</h3>
                    <!-- <p class="pricing__sentence">Up to 5 users</p> -->
                        </div>
                <div class="pricing__price">
                    <span class="pricing__anim pricing__anim--1">
                            <span class="pricing__currency">$</span>79
                    </span>
                    <span class="pricing__anim pricing__anim--2">
                            <span class="pricing__period">per year</span>
                    </span>
                </div>
                <div class="wrap-price">
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">One Year Standard Access</li>
                        <li class="pricing__feature">Limited Courses</li>
                        <li class="pricing__feature">300+ Lessons</li>
                        <li class="pricing__feature">Random Supporter</li>
                        <li class="pricing__feature">View Only Ebook</li>
                        <li class="pricing__feature">Standard Tutorials</li>
                        <li class="pricing__feature">Unlimited Registered User</li>
                    </ul>
                    <button class="pricing__action">Choose plan</button>
                </div>
            </div>
                </div>
                <div class="col-md-4 animate-box">
            <div class="pricing__item">
                <div class="wrap-price">
                    <!-- <div class="icon icon-home2"></div> -->
                    <h3 class="pricing__title">Gold</h3>
                    <!-- <p class="pricing__sentence">Unlimited users</p> -->
                        </div>
                <div class="pricing__price">
                    <span class="pricing__anim pricing__anim--1">
                            <span class="pricing__currency">$</span>499
                    </span>
                    <span class="pricing__anim pricing__anim--2">
                            <span class="pricing__period">per year</span>
                    </span>
                </div>
                <div class="wrap-price">
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Life Time Access</li>
                        <li class="pricing__feature">Unlimited All Courses</li>
                        <li class="pricing__feature">7000+ Lessons &amp; Growing</li>
                        <li class="pricing__feature">Free Supporter</li>
                        <li class="pricing__feature">Free Ebook Downloads</li>
                        <li class="pricing__feature">Premium Tutorials</li>
                        <li class="pricing__feature">Unlimited Registered User</li>
                    </ul>
                    <button class="pricing__action">Choose plan</button>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>

<div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
    <div class="overlay"></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 animate-box">
            <div class="date-counter text-center">
                <h2>Get 400 of Online Courses for Free</h2>
                <h3>By Mike Smith</h3>
                <div class="simply-countdown simply-countdown-one"></div>
                <p><strong>Limited Offer, Hurry Up!</strong></p>
                <p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-gallery" class="fh5co-bg-section">
    <div class="row text-center">
        <h2><span>Instagram Gallery</span></h2>
    </div>
    <div class="row">
        <div class="col-md-3 col-padded">
            <a href="#" class="gallery" style="background-image: url(images/project-5.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a href="#" class="gallery" style="background-image: url(images/project-2.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a href="#" class="gallery" style="background-image: url(images/project-3.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a href="#" class="gallery" style="background-image: url(images/project-4.jpg);"></a>
        </div>
    </div>
</div>
@endsection
