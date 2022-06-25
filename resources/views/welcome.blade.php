@extends('layouts.withnav')

@section('title', '| Home')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        
    /*===================< Header Part Starts >==============*/
    .header-part{
        height: 668px;
        background-image: url('../images/background.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        /* background-position: center; */
    }
    .overlay{
        background-color: #000000a5;
        height: 668px;
    }
    .welcome-part{
        margin-top: 170px;
        padding: 20px 50px;
        font-family: 'Kurale', serif;
    }
    .welcome-part h2{
        font-size: 56px; 
        color: #fff;
        margin-bottom: 0rem;
    }
    .welcome-part h1{
        font-family: 'El Messiri', sans-serif;
        font-weight: Bold; 
        font-size: 100px; 
        color: #ffc60b;
        text-shadow: 2px 2px 0px #000000;
    }
    .welcome-image img{
        max-width: 100%;
        padding-top: 100px;
    }
    .btn-outline-custom, .btn-custom{
        border-radius: 50px;
        width: 160px;
    }
    .btn-outline-custom{
        color: #ffc60b !important;
        border-color: #ffc60b !important;
    }
    .btn-outline-info.btn-outline-custom:hover,
    .btn-outline-info.btn-outline-custom:focus {
        background-color: #ffc60b !important;
        color: #fff !important;
        box-shadow: none;
    }
    .btn-outline-info:not(:disabled):not(.disabled).active:focus, 
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-info.dropdown-toggle:focus{
        box-shadow: none;
    }
    .btn-custom, .btn-custom:hover, .btn-custom:focus{
        background-color: #a3c624;
        border-color: #a3c624;
        box-shadow: none !important;
    }
    .btn-info:not(:disabled):not(.disabled).active, 
    .btn-info:not(:disabled):not(.disabled):active, 
    .show>.btn-info.dropdown-toggle,
    .btn-info:not(:disabled):not(.disabled).active:focus, 
    .btn-info:not(:disabled):not(.disabled):active:focus, 
    .show>.btn-info.dropdown-toggle:focus{
        background-color: #a3c624;
        border-color: #a3c624;
        box-shadow: none;
    }
    /*====================< Header Part Ends >===============*/
    </style>
@endsection

@section('content')


<section class="header-part">
    <div class="overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="welcome-part text-center">
                    <h2 data-aos="fade-left" data-aos-duration="6000">Welcome To</h2>
                    <h1 data-aos="fade-right" data-aos-duration="6000">LU <span style="    color: #04a653">ALUMNI</span></h1>
                    <h1 data-aos="fade-up" data-aos-duration="7000" style="font-size: 82px; margin-top: -42px;">ASSOCIATION</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@if(! Auth::check())

<section class="about-part" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-image">
                    <img src="{{asset('images/about_us.png')}}" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6">
                <div class="title-heading about-us">
                    <h2 class="color-one">know <span class="color-two font-bold">About Us</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam qui nesciunt excepturi ullam numquam libero modi ex cupiditate molestiae pariatur molestias veritatis, eum, explicabo quos dolorem et cum repellendus nulla beatae tenetur doloremque vitae architecto voluptatum inventore! Distinctio, itaque commodi?</p>
                    <ul class="social-list">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-news-part">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center">
                    <h2 class="color-one">here is some <span class="color-two font-bold">Latest News</span></h2>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 70px;">
            <div class="col-md-3">
                <div class="newses">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <h4><a href="#" class="news-title">This Is News Title</a></h4>
                          <span class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</span>
                          <p class="card-text">Some quick example text to build on the card title...</p>
                          <a class="btn btn-outline-primary btn-custom-details" href="#" role="button">See Details</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="newses">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <h4><a href="#" class="news-title">This Is News Title</a></h4>
                          <span class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</span>
                          <p class="card-text">Some quick example text to build on the card title...</p>
                          <a class="btn btn-outline-primary btn-custom-details" href="#" role="button">See Details</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="newses">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <h4><a href="#" class="news-title">This Is News Title</a></h4>
                          <span class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</span>
                          <p class="card-text">Some quick example text to build on the card title...</p>
                          <a class="btn btn-outline-primary btn-custom-details" href="#" role="button">See Details</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="newses">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <h4><a href="#" class="news-title">This Is News Title</a></h4>
                          <span class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</span>
                          <p class="card-text">Some quick example text to build on the card title...</p>
                          <a class="btn btn-outline-primary btn-custom-details" href="#" role="button">See Details</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="event-part">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center">
                    <h2 class="color-one">this is our <span class="color-two font-bold">Successful Events</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="event-details">
                    <div class="owl-carousel owl-theme" id="event">
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</p>
                                    <h4><a href="#" class="card-text">Teachers Day</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</p>
                                    <h4><a href="#" class="card-text">Fathers Day</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</p>
                                    <h4><a href="#" class="card-text">Mothers Day</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</p>
                                    <h4><a href="#" class="card-text">Sleeping Day</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="successful-story-part">
    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-heading text-center">
                        <h2 class="color-one">this is our <span class="color-two font-bold">Successful Stories</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" id="story">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('images/background.jpg') }}" alt="" class="img-thumbnail">
                                </div>
                                <div class="col-md-6">
                                    <h3 class="profile-name" style="padding-top: 50px;"><a href="#">Pias Das Raaz</a></h3>
                                    <q>Web Fullstack Developer</q>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem placeat autem voluptate aut, natus adipisci? Atque voluptate quidem cupiditate ipsa!</p>
                                    <ul class="social-list text-left">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@else

<section class="career-advice-part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                {{-- <div class="career-category">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General</a>
                    </div>
                </div> --}}
            </div>

            <div class="col-md-6" style="border-left: 1px solid #eeeeee88; border-right: 1px solid #eeeeee88;">
                <div class="tab-content" id="v-pills-tabContent">

                    {{-- start general tab --}}
                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-gre-tab">
                        {{-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Career & Networking</li>
                                <li class="breadcrumb-item"><a href="#">General Advice</a></li>
                                <li class="breadcrumb-item active" aria-current="page">GENERAL</li>
                            </ol>
                        </nav> --}}

                        <hr>

                        @foreach($genAdvices as $genAdvice)
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($genAdvice->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$genAdvice->user->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">{{ $genAdvice->user->first_name }}</div>
                                            <div class="text-muted">{{ $genAdvice->user->department." ".$genAdvice->user->university_batch }} Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    
                                <h5 class="card-title">{{ $genAdvice->title }} ( {{ \App\Models\Category\Category::find($genAdvice->cat_id)->category_name }} )</h5>

                                <p class="card-text">
                                    {{ $genAdvice->body }}
                                </p>
                        @isset($genAdvice->avatar)
                            <?php
                            
                                $mime = null;
                                if(isset($genAdvice->avatar)){
                                    $info = new SplFileInfo($genAdvice->avatar);
                                    $mime = $info->getExtension();
                                }
                            ?>
                            @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                    <figure class="card-image text-center">
                                        <img src="{{ asset('postsfiles/'.$genAdvice->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                    </figure>
                            @else
                                    <div class="card-file">
                                        <a href="{{ route('posts.file.download', ['filename' => $genAdvice->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $genAdvice->title }}.{{ $mime }}</a>
                                    </div>
                                    
                            @endif                            
                        @endisset
                            </div>

                            <div class="card-footer">
                                    <div class="float-left">
                                    
                                    @if(!App\Models\Like\Like::where(['user_id' => Auth::user()->id, 'post_id' => $genAdvice->id])->first())
                                        <a href="{{ route('likes.store', ['id' => $genAdvice->id]) }}" class="card-link"><i class="far fa-heart"></i> Like <sup>({{ sizeof($genAdvice->likes) }})</sup></a>
                                    @else
                                        <a href="{{ route('likes.destroy', ['id' => $genAdvice->id]) }}" class="card-link"><i class="fas fa-heart" style="color:red;"></i> Unlike <sup>({{ sizeof($genAdvice->likes) }})</sup></a>
                                    @endif
    
                                        <a href="#" class="card-link comment" id="comment{{ $genAdvice->id }}"><i class="far fa-comments"></i> Comment <sup>({{ sizeof($genAdvice->comments) }})</sup></a>
                                    </div>
                                    <div class="float-right">
    
                                    <?php
                                        // $date = date_create($genAdvice->updated_at);
                                        $myDateTime = new DateTime($genAdvice->updated_at);
                                        $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                        
                                    ?>
                                        <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                    </div>
                            </div>

                            <div class="card-body post-comment" id="post-comment{{ $genAdvice->id }}">
                                <div class="new-comment">
                                    <form action="{{ route('comments.store', ['id' => $genAdvice->id]) }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-9">
                                                <textarea class="form-control comment-area" id="postComment" rows="1" placeholder="Post a comment" name="postComment"></textarea>
                                            </div>
                                            <div class="col-md-3">
                                                <button type="sumbit" class="btn btn-primary btn-lg btn-block btn-comment">Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                @foreach($genAdvice->comments as $comment)
                                <div class="user-comments">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                                @if(Auth::user()->id == $genAdvice->id || Auth::user()->id == $comment->user->id)
                                                <a href="{{ route('comments.destroy', ['id'=>$comment->id]) }}" class="btn btn-light btn-sm comment-delete" id="dltCmnt"><i class="fas fa-trash-alt"></i></a>
                                                @endif
                                            <div class="mr-2">
                                            @if($comment->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$comment->user->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">          
                                            @endif
                                            </div>
                                            <div class="ml-2">
                                                <div class="h5 m-0"><a href="#">{{ $comment->user->first_name. " ". $comment->user->last_name }}</a></div>
                                            <?php
                                                // $date = date_create($post->updated_at);
                                                $commentDate = new DateTime($comment->updated_at);
                                                $commentDate->setTimezone(new DateTimeZone('GMT+06:00'));
                                                
                                            ?>
                                                <div class="text-muted">{{ $commentDate->format('d-m-Y | h:i A') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comnt">{{ $comment->comment }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 offset-md-5">
                                    {{ $genAdvices->links() }}
                                </div>
                                <div class="offset-md-5">				
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- close general advice tab --}}

                </div>
            </div>


            {{-- suggest alumni card --}}
            <div class="col-md-3">
                <h3 class="color-two">Suggested Alumni</h3>
                <hr>
                <div class="owl-carousel owl-theme suggested-alumni text-center" id="sugestedAlumni">
                    <?php $aliId = '9999999'; ?>
                    @foreach ($alumnis as $key => $alumni)
                    <?php

                        if($key == 0 ) $aliId = $alumni->user->id;
                        
                        if( $key != 0 && $aliId == $alumni->user->id){
                            $aliId = $alumni->user->id;
                            continue;
                        }
                    ?> 
                    <div class="item team-member ">
                        <div class="card text-center" style="width: 100%;">
                        @if($alumni->user->avatar)
                            <a href="{{ route('user_profile.show', ['id' => $alumni->user->id]) }}"><img class="card-img-top" src="{{ asset('user_files/'.$alumni->user->avatar) }}" alt="Card image cap"></a>
                        @else
                            <a href="{{ route('user_profile.show', ['id' => $alumni->user->id]) }}"><img class="card-img-top" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="Card image cap"></a>
                        @endif
                            
                            <div class="card-body">
                                <h5 class="card-title color-two" style="margin-bottom: 0px;"><a href="{{ route('user_profile.show', ['id' => $alumni->user->id]) }}" class="user-title">{{ $alumni->user->first_name." ".$alumni->user->last_name }}</a></h5>
                                <p class="card-text text-center" style="font-size: 14px; font-weight: bold; color: #666;">{{ $alumni->user->university_batch }} Batch, {{ $alumni->user->department }} Department</p>
                                <ul class="social-list">
                                @isset($alumni->user->fb_link)
                                    <li><a href="{{ $alumni->user->fb_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                @endisset

                                @isset($alumni->user->tw_link)
                                    <li><a href="{{ $alumni->user->tw_link }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                @endisset

                                @isset($alumni->user->li_link)
                                    <li><a href="{{ $alumni->user->li_link }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                @endisset
                                </ul>
                            </div>
                        </div>
                    </div>                        
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endif

@endsection

@section('scripts')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    // ============< Event Part >===========

$(document).ready(function(){
    $('#event').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
});
    
// ============< story Part >===========
$(document).ready(function(){
    $('#story').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});
</script>

<script>
    // ============< Suggested Alumni Part >===========
$(document).ready(function(){
    $('#sugestedAlumni').owlCarousel({
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


