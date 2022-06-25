@extends('layouts.withnav') 

@section('title', '| upcomming events') 
@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">

    <style>
            .upcoming-event-part {
                padding-top: 78px;
            }
            .fade-carousel {
                position: relative;
                height: 100vh;
            }
            .item {
                height: 100vh;
            }
            .fade-carousel .carousel-indicators > li {
                margin: 0 2px;
                background-color: #f39c12;
                border-color: #f39c12;
                opacity: .7;
            }
            .fade-carousel .carousel-indicators > li.active {
              width: 10px;
              height: 10px;
              opacity: 1;
            }
            
            /********************************/
            /*          Hero Headers        */
            /********************************/
            .hero {
                position: absolute;
                top: 50%;
                left: 50%;
                z-index: 3;
                color: #fff;
                background: #000000b0;
                padding: 50px 45px;
                border-radius: 20px;
                text-align: center;
                text-transform: uppercase;
                text-shadow: 1px 1px 0 rgba(0,0,0,.75);
                  -webkit-transform: translate3d(-50%,-50%,0);
                     -moz-transform: translate3d(-50%,-50%,0);
                      -ms-transform: translate3d(-50%,-50%,0);
                       -o-transform: translate3d(-50%,-50%,0);
                          transform: translate3d(-50%,-50%,0);
            }
            .hero h1 {
                font-size: 4em;    
                font-weight: bold;
                margin: 0;
                padding: 0;
            }
            .hero p{
                color: #fff;
                text-transform: initial;
                text-shadow: none;
                font-weight: 500;
            }

            .hero ul{
                margin-bottom: 0px;
                display: inline-block;
                width: 100%;
                text-align: center;
            }
            .hero ul>li{
                display: inline-block;
                padding: 30px;
                padding-top: 5px;
                padding-bottom: 30px;
            }
            
            .item .hero {
                opacity: 0;
                -webkit-transition: 2s all ease-in-out .1s;
                   -moz-transition: 2s all ease-in-out .1s; 
                    -ms-transition: 2s all ease-in-out .1s; 
                     -o-transition: 2s all ease-in-out .1s; 
                        transition: 2s all ease-in-out .1s; 
            }
            .item.active .hero {
                opacity: 1;
                -webkit-transition: 2s all ease-in-out .1s;
                   -moz-transition: 2s all ease-in-out .1s; 
                    -ms-transition: 2s all ease-in-out .1s; 
                     -o-transition: 2s all ease-in-out .1s; 
                        transition: 2s all ease-in-out .1s;    
            }
            
            /********************************/
            /*            Overlay           */
            /********************************/
            .overlay {
                position: absolute;
                width: 100%;
                height: 100%;
                z-index: 2;
                background-color: #080d15;
                opacity: .7;
            }
            
            /********************************/
            /*          Custom Buttons      */
            /********************************/
            .btn.btn-lg {padding: 10px 40px;}
            .btn.btn-hero,
            .btn.btn-hero:hover,
            .btn.btn-hero:focus {
                color: #f5f5f5;
                background-color: #1abc9c;
                border-color: #1abc9c;
                outline: none;
                margin: 20px auto;
            }
            
            /********************************/
            /*       Slides backgrounds     */
            /********************************/
            .fade-carousel .slides .slide-1, 
            .fade-carousel .slides .slide-2,
            .fade-carousel .slides .slide-3 {
              height: 100vh;
              background-size: cover;
              background-position: center center;
              background-repeat: no-repeat;
            }
            .item {
              background-image: url('{{asset('images/background.jpg')}}'); 
              background-size: 100%;
              background-repeat: no-repeat;
            }
            
            /********************************/
            /*          Media Queries       */
            /********************************/
            @media screen and (min-width: 980px){
                .hero { width: 980px; }    
            }
            @media screen and (max-width: 640px){
                .hero h1 { font-size: 4em; }    
            }
    </style>

@endsection

@section('content')

<section class="upcoming-event-part">
    {{-- <div class="container-fluid"> --}}
    <div class="owl-carousel owl-theme text-center" id="upcomingEvent">
            @foreach($events as $event)
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>
                        <h1>{{ $event->event_name }}</h1>
                        @if(isset($event->club_id))
                        <h4>{{ \App\Models\Club\Club::find($event->club_id)->club_name }}</h4>
                        @else
                        <h4>Organize by Leading University</h4>
                        @endif
                        <ul>
                            <li><i class="fas fa-location-arrow"></i> {{ $event->event_location }}</li>
                            <li><i class="far fa-calendar-check"></i> {{ $event->event_date }}</li>
                            <li><i class="far fa-clock"></i> {{ $event->event_date }}</li>
                        </ul>      
                        <p>{{ $event->event_details }}</p>
                    </hgroup>
                    <a href="{{ $event->event_fb_link }}" target="_blank" class="btn btn-outline-info btn-lg">See Event Details</a>
                </div>
            </div>
            @endforeach
        </div>
</section>

@endsection @section('scripts')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
    // ============< Suggested Alumni Part >===========
$(document).ready(function(){
    $('#upcomingEvent').owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        dots: false,
        nav: false,
        // navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000
    });
});
</script>
@endsection