
@extends('layouts.app') 
@section('content')
<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
        <li style="background-image: url(images/img_bg_4.jpg);">
            <div class="overlay-gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center slider-text">
                        <div class="slider-text-inner">
                            <h1 class="heading-section">Services</h1>
                                <h2>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... <a href="http://freehtml5.co/" target="_blank">Business</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>

<div id="fh5co-course-categories">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Course categories</h2>
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
@endsection