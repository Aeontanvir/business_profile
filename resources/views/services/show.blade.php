
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
                            <h1 class="heading-section">{{$service->title}}</h1>
                            <h2>{{$service->notes}}... <a href="http://freehtml5.co/" target="_blank">Business</a></h2>
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
                            <h1 class="heading-section">{{$service->title}}</h1>
                            <h2>{{$service->notes}}... <a href="http://freehtml5.co/" target="_blank">Business</a></h2>
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
                <h2>{{$service->title}}</h2>
                <p>{{$service->notes}}</p>
            </div>
        </div>
        <div class="row">
            @foreach ($service->gadgets as $gadget)
            <div class="media">
                <div class="media-left">
                    <a href="#">
                    <img class="media-object" src="/storage/{{$gadget->thumb}}" style="width: 100px; height: 100px;">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{$gadget->title}}</h4>
                    <p>{{$gadget->notes}}</p>
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