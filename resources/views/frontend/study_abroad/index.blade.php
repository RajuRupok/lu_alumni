@extends('layouts.withnav')
@section('title', '| study abroad')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
@endsection

@section('content')

<section class="career-advice-part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="career-category">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-item nav-link active" id="nav-gre-tab" data-toggle="tab" href="#nav-gre" role="tab" aria-controls="nav-gre" aria-selected="true">GRE</a>
                        <a class="nav-item nav-link" id="nav-ielts-tab" data-toggle="tab" href="#nav-ielts" role="tab" aria-controls="nav-ielts" aria-selected="false">IELTS</a>
                        <a class="nav-item nav-link" id="nav-uniinfo-tab" data-toggle="tab" href="#nav-uniinfo" role="tab" aria-controls="nav-uniinfo" aria-selected="false">Universtiy Information</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="border-left: 1px solid #eeeeee88; border-right: 1px solid #eeeeee88;">
                <div class="tab-content" id="v-pills-tabContent">

                    {{-- start GRE tab --}}
                    <div class="tab-pane fade show active" id="nav-gre" role="tabpanel" aria-labelledby="nav-gre-tab">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Career & Networking</li>
                                <li class="breadcrumb-item"><a href="#">Study Abroad</a></li>
                                <li class="breadcrumb-item active" aria-current="page">GRE</li>
                            </ol>
                        </nav>

                        <hr>

                    @foreach($gres as $gre)
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($gre->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$gre->user->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">{{ $gre->user->first_name }}</div>
                                            <div class="text-muted">{{ $gre->user->department." ".$gre->user->university_batch }} Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    
                                <h5 class="card-title">{{ $gre->title }} ( {{ \App\Models\Category\Category::find($gre->cat_id)->category_name }} )</h5>

                                <p class="card-text">
                                    {{ $gre->body }}
                                </p>
                    @isset($gre->avatar)
                        <?php
                        
                            $mime = null;
                            if(isset($gre->avatar)){
                                $info = new SplFileInfo($gre->avatar);
                                $mime = $info->getExtension();
                            }
                        ?>
                        @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                <figure class="card-image text-center">
                                    <img src="{{ asset('postsfiles/'.$gre->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                </figure>
                        @else
                                <div class="card-file">
                                    <a href="{{ route('posts.file.download', ['filename' => $gre->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $gre->title }}.{{ $mime }}</a>
                                </div>
                                
                        @endif                            
                    @endisset
                            </div>

                            <div class="card-footer">
                                 <div class="float-left">

                                @if(!App\Models\Like\Like::where(['user_id' => Auth::user()->id, 'post_id' => $gre->id])->first())
                                    <a href="{{ route('likes.store', ['id' => $gre->id]) }}" class="card-link"><i class="far fa-heart"></i> Like <sup>({{ sizeof($gre->likes) }})</sup></a>
                                @else
                                    <a href="{{ route('likes.destroy', ['id' => $gre->id]) }}" class="card-link"><i class="fas fa-heart" style="color:red;"></i> Unlike <sup>({{ sizeof($gre->likes) }})</sup></a>
                                @endif
                                    <a href="#" class="card-link comment" id="comment{{ $gre->id }}"><i class="far fa-comments"></i> Comment <sup>({{ sizeof($gre->comments) }})</sup></a>
                                </div>
                                <div class="float-right">

                                <?php
                                    // $date = date_create($gre->updated_at);
                                    $myDateTime = new DateTime($gre->updated_at);
                                    $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                    
                                ?>
                                    <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                </div>
                            </div>
                            <div class="card-body post-comment" id="post-comment{{ $gre->id }}">
                                    <div class="new-comment">
                                        <form action="{{ route('comments.store', ['id' => $gre->id]) }}" method="POST">
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
                                    @foreach($gre->comments as $comment)
                                    <div class="user-comments">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                    @if(Auth::user()->id == $gre->id || Auth::user()->id == $comment->user->id)
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
                                    {{ $gres->links() }}
                                </div>
                                <div class="offset-md-5">				
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- close gre tab --}}


                    {{-- start ielts jobs tab --}}
                    <div class="tab-pane fade" id="nav-ielts" role="tabpanel" aria-labelledby="nav-ielts-tab">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Career & Networking</li>
                                <li class="breadcrumb-item"><a href="#">Study Abroad</a></li>
                                <li class="breadcrumb-item active" aria-current="page">IELTS</li>
                            </ol>
                        </nav>

                        <hr>

                    @foreach($ieltss as $ielts)
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($ielts->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$ielts->user->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">{{ $ielts->user->first_name }}</div>
                                            <div class="text-muted">{{ $ielts->user->department." ".$ielts->user->university_batch }} Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    
                                <h5 class="card-title">{{ $ielts->title }} ( {{ \App\Models\Category\Category::find($ielts->cat_id)->category_name }} )</h5>

                                <p class="card-text">
                                    {{ $ielts->body }}
                                </p>
                    @isset($ielts->avatar)
                        <?php
                        
                            $mime = null;
                            if(isset($ielts->avatar)){
                                $info = new SplFileInfo($ielts->avatar);
                                $mime = $info->getExtension();
                            }
                        ?>
                        @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                <figure class="card-image text-center">
                                    <img src="{{ asset('postsfiles/'.$ielts->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                </figure>
                        @else
                                <div class="card-file">
                                    <a href="{{ route('posts.file.download', ['filename' => $ielts->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $ielts->title }}.{{ $mime }}</a>
                                </div>
                                
                        @endif                            
                    @endisset
                            </div>

                            <div class="card-footer">
                                 <div class="float-left">

                                @if(!App\Models\Like\Like::where(['user_id' => Auth::user()->id, 'post_id' => $ielts->id])->first())
                                    <a href="{{ route('likes.store', ['id' => $ielts->id]) }}" class="card-link"><i class="far fa-heart"></i> Like <sup>({{ sizeof($ielts->likes) }})</sup></a>
                                @else
                                    <a href="{{ route('likes.destroy', ['id' => $ielts->id]) }}" class="card-link"><i class="fas fa-heart" style="color:red;"></i> Unlike <sup>({{ sizeof($ielts->likes) }})</sup></a>
                                @endif
                                    <a href="#" class="card-link comment" id="comment{{ $ielts->id }}"><i class="far fa-comments"></i> Comment <sup>({{ sizeof($ielts->comments) }})</sup></a>
                                </div>
                                <div class="float-right">

                                <?php
                                    // $date = date_create($ielts->updated_at);
                                    $myDateTime = new DateTime($ielts->updated_at);
                                    $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                    
                                ?>
                                    <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                </div>
                            </div>
                            <div class="card-body post-comment" id="post-comment{{ $ielts->id }}">
                                    <div class="new-comment">
                                        <form action="{{ route('comments.store', ['id' => $ielts->id]) }}" method="POST">
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
                                    @foreach($ielts->comments as $comment)
                                    <div class="user-comments">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                    @if(Auth::user()->id == $ielts->id || Auth::user()->id == $comment->user->id)
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
                                    {{ $ieltss->links() }}
                                </div>
                                <div class="offset-md-5">				
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- close ielts tab --}}





                    {{-- start uniinfo tab --}}
                    <div class="tab-pane fade" id="nav-uniinfo" role="tabpanel" aria-labelledby="nav-uniinfo-tab">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Career & Networking</li>
                                <li class="breadcrumb-item"><a href="#">Study Abroad</a></li>
                                <li class="breadcrumb-item active" aria-current="page">University Information</li>
                            </ol>
                        </nav>

                        <hr>

                    @foreach($uniInfos as $uniInfo)
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($uniInfo->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$uniInfo->user->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">{{ $uniInfo->user->first_name }}</div>
                                            <div class="text-muted">{{ $uniInfo->user->department." ".$uniInfo->user->university_batch }} Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    
                                <h5 class="card-title">{{ $uniInfo->title }} ( {{ \App\Models\Category\Category::find($uniInfo->cat_id)->category_name }} )</h5>

                                <p class="card-text">
                                    {{ $uniInfo->body }}
                                </p>
                    @isset($uniInfo->avatar)
                        <?php
                        
                            $mime = null;
                            if(isset($uniInfo->avatar)){
                                $info = new SplFileInfo($uniInfo->avatar);
                                $mime = $info->getExtension();
                            }
                        ?>
                        @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                <figure class="card-image text-center">
                                    <img src="{{ asset('postsfiles/'.$uniInfo->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                </figure>
                        @else
                                <div class="card-file">
                                    <a href="{{ route('posts.file.download', ['filename' => $uniInfo->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $uniInfo->title }}.{{ $mime }}</a>
                                </div>
                                
                        @endif                            
                    @endisset
                            </div>

                            <div class="card-footer">
                                 <div class="float-left">

                                @if(!App\Models\Like\Like::where(['user_id' => Auth::user()->id, 'post_id' => $uniInfo->id])->first())
                                    <a href="{{ route('likes.store', ['id' => $uniInfo->id]) }}" class="card-link"><i class="far fa-heart"></i> Like <sup>({{ sizeof($uniInfo->likes) }})</sup></a>
                                @else
                                    <a href="{{ route('likes.destroy', ['id' => $uniInfo->id]) }}" class="card-link"><i class="fas fa-heart" style="color:red;"></i> Unlike <sup>({{ sizeof($uniInfo->likes) }})</sup></a>
                                @endif
                                    <a href="#" class="card-link comment" id="comment{{ $uniInfo->id }}"><i class="far fa-comments"></i> Comment <sup>({{ sizeof($uniInfo->comments) }})</sup></a>
                                </div>
                                <div class="float-right">

                                <?php
                                    // $date = date_create($uniInfo->updated_at);
                                    $myDateTime = new DateTime($uniInfo->updated_at);
                                    $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                    
                                ?>
                                    <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                </div>
                            </div>
                            <div class="card-body post-comment" id="post-comment{{ $uniInfo->id }}">
                                    <div class="new-comment">
                                        <form action="{{ route('comments.store', ['id' => $uniInfo->id]) }}" method="POST">
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
                                    @foreach($uniInfo->comments as $comment)
                                    <div class="user-comments">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                    @if(Auth::user()->id == $uniInfo->id || Auth::user()->id == $comment->user->id)
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
                                    {{ $uniInfos->links() }}
                                </div>
                                <div class="offset-md-5">				
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- close BCS tab --}}

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
                        <div class="card text-center" style="width: 18rem;">
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