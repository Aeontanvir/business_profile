
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
                            <h1 class="heading-section">Our Faculty</h1>
                                <h2>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... <a href="http://freehtml5.co/" target="_blank">Business</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>

<div id="fh5co-about">
    <div class="container">
        <div class="col-md-9 animate-box">
            <span>About {{ $member->name }}</span>
            <h2>{{ $member->designation->name }}</h2>
            {!! $member->details !!}
            
        </div>
        <div class="col-md-3 text-center">
            <div class="staff">
                <div class="staff-img" style="background-image: url(/storage/{{$member->avatar}});">
                    <ul class="fh5co-social">
                        <li><a target="_blank" href="{{ $member->facebook }}"><i class="icon-facebook2"></i></a></li>
                        <li><a target="_blank" href="{{ $member->twitter }}"><i class="icon-twitter2"></i></a></li>
                        <li><a target="_blank" href="#"><i class="icon-dribbble2"></i></a></li>
                        <li><a target="_blank" href="#"><i class="icon-dribbble2"></i></a></li>
                        <li><a target="_blank" href="#"><i class="icon-dribbble2"></i></a></li>
                        <li><a target="_blank" href="{{ $member->github }}"><i class="icon-github"></i></a></li>
                    </ul>
                </div>
                <span>{{ $member->designation->name }}</span>
                <h3><a href="{{ $member->path() }}">{{ $member->name}}</a></h3>
                <!-- <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p> -->
            </div>
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