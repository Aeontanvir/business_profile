
@extends('layouts.app') 
@section('content')
<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
        <li style="background-image: url({{ URL::asset('images/img_bg_4.jpg')}});">
            <div class="overlay-gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center slider-text">
                        <div class="slider-text-inner">
                            <h1 class="heading-section">{{$subject->title}}</h1>
                            <h2>{{$subject->notes}}... <a href="http://freehtml5.co/" target="_blank">Business</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url({{ URL::asset('images/img_bg_4.jpg')}});">
            <div class="overlay-gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center slider-text">
                        <div class="slider-text-inner">
                            <h1 class="heading-section">{{$subject->title}}</h1>
                            <h2>{{$subject->notes}}... <a href="http://freehtml5.co/" target="_blank">Business</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>

<div id="fh5co-course">
    <div class="container"
        <div class="row">
            @foreach ($subject->courses as $course)
            <div class="col-md-6 animate-box fadeInUp animated-fast">
                <div class="course">
                    <a href="#" class="course-img" style="background-image: url({{ URL::asset('images/project-1.jpg')}});">
                    </a>
                    <div class="desc">
                        <h3><a href="#">{{$course->title}}</a></h3>
                        <p>{{ str_limit($course->notes, 150)}}</p>
                        <span><a href="{{ $course->path() }}" class="btn btn-primary btn-sm btn-course">Take A Tour</a></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div id="fh5co-register" style="background-image: url({{ URL::asset('images/img_bg_2.jpg')}});">
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
@endsection