@extends('layouts.withnav') 

@section('title', '| general advice') 
@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
@endsection

@section('content')

<section class="career-advice-part">
    <div class="container">
        <div class="row">

            <div class="col-md-8" style="border-left: 1px solid #eeeeee88; border-right: 1px solid #eeeeee88;">
                <div class="tab-content" id="v-pills-tabContent">

                    {{-- start general tab --}}
                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-gre-tab">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Stories</li>
                                <li class="breadcrumb-item active" aria-current="page">Success Stories</li>
                            </ol>
                        </nav>

                        <hr>

                    @foreach($stories as $story)
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($story->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$story->user->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">{{ $story->user->first_name }}</div>
                                            <div class="text-muted">{{ $story->user->department." ".$story->user->university_batch }} Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    
                                <h5 class="card-title">{{ $story->title }} ( {{ \App\Models\Category\Category::find($story->cat_id)->category_name }} )</h5>

                                <p class="card-text">
                                    {{ $story->body }}
                                </p>
                        @isset($story->avatar)
                            <?php
                            
                                $mime = null;
                                if(isset($story->avatar)){
                                    $info = new SplFileInfo($story->avatar);
                                    $mime = $info->getExtension();
                                }
                            ?>
                            @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                    <figure class="card-image text-center">
                                        <img src="{{ asset('postsfiles/'.$story->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                    </figure>
                            @else
                                    <div class="card-file">
                                        <a href="{{ route('posts.file.download', ['filename' => $story->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $story->title }}.{{ $mime }}</a>
                                    </div>
                                    
                            @endif                            
                        @endisset
                            </div>

                            <div class="card-footer">
                                    <div class="float-left">
                                    
                                    @if(!App\Models\Like\Like::where(['user_id' => Auth::user()->id, 'post_id' => $story->id])->first())
                                        <a href="{{ route('likes.store', ['id' => $story->id]) }}" class="card-link"><i class="far fa-heart"></i> Like <sup>({{ sizeof($story->likes) }})</sup></a>
                                    @else
                                        <a href="{{ route('likes.destroy', ['id' => $story->id]) }}" class="card-link"><i class="fas fa-heart" style="color:red;"></i> Unlike <sup>({{ sizeof($story->likes) }})</sup></a>
                                    @endif
    
                                        <a href="#" class="card-link comment" id="comment{{ $story->id }}"><i class="far fa-comments"></i> Comment <sup>({{ sizeof($story->comments) }})</sup></a>
                                    </div>
                                    <div class="float-right">
    
                                    <?php
                                        // $date = date_create($story->updated_at);
                                        $myDateTime = new DateTime($story->updated_at);
                                        $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                        
                                    ?>
                                        <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                    </div>
                            </div>

                            <div class="card-body post-comment" id="post-comment{{ $story->id }}">
                                <div class="new-comment">
                                    <form action="{{ route('comments.store', ['id' => $story->id]) }}" method="POST">
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
                                @foreach($story->comments as $comment)
                                <div class="user-comments">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                                @if(Auth::user()->id == $story->id || Auth::user()->id == $comment->user->id)
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
                                    {{ $stories->links() }}
                                </div>
                                <div class="offset-md-5">				
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- close gre tab --}}

                </div>
            </div>


            {{-- suggest alumni card --}}
            <div class="col-md-4">
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

@endsection @section('scripts')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
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