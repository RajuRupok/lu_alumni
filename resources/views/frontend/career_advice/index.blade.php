@extends('layouts.withnav') @section('title', '| Career Advice') @section('stylesheet')
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}"> @endsection @section('content')

<section class="career-advice-part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="career-category">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-item nav-link active" id="nav-itJob-tab" data-toggle="tab" href="#nav-itJob" role="tab" aria-controls="nav-itJob" aria-selected="true">IT Jobs</a>
                        <a class="nav-item nav-link" id="nav-govt-tab" data-toggle="tab" href="#nav-govt" role="tab" aria-controls="nav-govt" aria-selected="false">Govt. Job</a>
                        <a class="nav-item nav-link" id="nav-bcs-tab" data-toggle="tab" href="#nav-bcs" role="tab" aria-controls="nav-bcs" aria-selected="false">BCS</a>
                        <a class="nav-item nav-link" id="nav-ideas-tab" data-toggle="tab" href="#nav-ideas" role="tab" aria-controls="nav-ideas" aria-selected="false">Ideas</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="border-left: 1px solid #eeeeee88; border-right: 1px solid #eeeeee88;">
                <div class="tab-content" id="v-pills-tabContent">

                    {{-- start IT jobs tab --}}
                    <div class="tab-pane fade show active" id="nav-itJob" role="tabpanel" aria-labelledby="nav-itJob-tab">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Career & Networking</li>
                                <li class="breadcrumb-item"><a href="#">Career Advice</a></li>
                                <li class="breadcrumb-item active" aria-current="page">IT-Jobs</li>
                            </ol>
                        </nav>

                        <hr>

                    @foreach($itjobs as $itjob)
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($itjob->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$itjob->user->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">{{ $itjob->user->first_name }}</div>
                                            <div class="text-muted">{{ $itjob->user->department." ".$itjob->user->university_batch }} Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    
                                <h5 class="card-title">{{ $itjob->title }} ( {{ \App\Models\Category\Category::find($itjob->cat_id)->category_name }} )</h5>

                                <p class="card-text">
                                    {{ $itjob->body }}
                                </p>
                    @isset($itjob->avatar)
                        <?php
                        
                            $mime = null;
                            if(isset($itjob->avatar)){
                                $info = new SplFileInfo($itjob->avatar);
                                $mime = $info->getExtension();
                            }
                        ?>
                        @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                <figure class="card-image text-center">
                                    <img src="{{ asset('postsfiles/'.$itjob->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                </figure>
                        @else
                                <div class="card-file">
                                    <a href="{{ route('posts.file.download', ['filename' => $itjob->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $itjob->title }}.{{ $mime }}</a>
                                </div>
                                
                        @endif                            
                    @endisset
                            </div>

                            <div class="card-footer">
                                <div class="float-left">
                                
                                @if(!App\Models\Like\Like::where(['user_id' => Auth::user()->id, 'post_id' => $itjob->id])->first())
                                    <a href="{{ route('likes.store', ['id' => $itjob->id]) }}" class="card-link"><i class="far fa-heart"></i> Like <sup>({{ sizeof($itjob->likes) }})</sup></a>
                                @else
                                    <a href="{{ route('likes.destroy', ['id' => $itjob->id]) }}" class="card-link"><i class="fas fa-heart" style="color:red;"></i> Unlike <sup>({{ sizeof($itjob->likes) }})</sup></a>
                                @endif

                                    <a href="#" class="card-link comment" id="comment{{ $itjob->id }}"><i class="far fa-comments"></i> Comment <sup>({{ sizeof($itjob->comments) }})</sup></a>
                                </div>
                                <div class="float-right">

                                <?php
                                    // $date = date_create($itjob->updated_at);
                                    $myDateTime = new DateTime($itjob->updated_at);
                                    $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                    
                                ?>
                                    <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                </div>
                            </div>
                            <div class="card-body post-comment" id="post-comment{{ $itjob->id }}">
                                <div class="new-comment">
                                    <form action="{{ route('comments.store', ['id' => $itjob->id]) }}" method="POST">
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
                                @foreach($itjob->comments as $comment)
                                <div class="user-comments">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                                @if(Auth::user()->id == $itjob->id || Auth::user()->id == $comment->user->id)
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
                                    {{ $itjobs->links() }}
                                </div>
                                <div class="offset-md-5">				
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- close it jobs tab --}}

                    {{-- start govt jobs tab --}}
                    <div class="tab-pane fade" id="nav-govt" role="tabpanel" aria-labelledby="nav-govt-tab">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Career & Networking</li>
                                <li class="breadcrumb-item"><a href="#">Career Advice</a></li>
                                <li class="breadcrumb-item active" aria-current="page">GOVT.-Jobs</li>
                            </ol>
                        </nav>

                        <hr>

                    @foreach($govtjobs as $govtjob)
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($govtjob->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$govtjob->user->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">{{ $govtjob->user->first_name }}</div>
                                            <div class="text-muted">{{ $govtjob->user->department." ".$govtjob->user->university_batch }} Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    
                                <h5 class="card-title">{{ $govtjob->title }} ( {{ \App\Models\Category\Category::find($govtjob->cat_id)->category_name }} )</h5>

                                <p class="card-text">
                                    {{ $govtjob->body }}
                                </p>
                    @isset($govtjob->avatar)
                        <?php
                        
                            $mime = null;
                            if(isset($govtjob->avatar)){
                                $info = new SplFileInfo($govtjob->avatar);
                                $mime = $info->getExtension();
                            }
                        ?>
                        @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                <figure class="card-image text-center">
                                    <img src="{{ asset('postsfiles/'.$govtjob->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                </figure>
                        @else
                                <div class="card-file">
                                    <a href="{{ route('posts.file.download', ['filename' => $govtjob->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $govtjob->title }}.{{ $mime }}</a>
                                </div>
                                
                        @endif                            
                    @endisset
                            </div>

                            <div class="card-footer">
                                <div class="float-left">
                                @if(!App\Models\Like\Like::where(['user_id' => Auth::user()->id, 'post_id' => $govtjob->id])->first())
                                    <a href="{{ route('likes.store', ['id' => $govtjob->id]) }}" class="card-link"><i class="far fa-heart"></i> Like <sup>({{ sizeof($govtjob->likes) }})</sup></a>
                                @else
                                    <a href="{{ route('likes.destroy', ['id' => $govtjob->id]) }}" class="card-link"><i class="fas fa-heart" style="color:red;"></i> Unlike <sup>({{ sizeof($govtjob->likes) }})</sup></a>
                                @endif
                                    <a href="#" class="card-link comment" id="comment{{ $govtjob->id }}"><i class="far fa-comments"></i> Comment <sup>({{ sizeof($govtjob->comments) }})</sup></a>
                                </div>
                                <div class="float-right">

                                <?php
                                    // $date = date_create($govtjob->updated_at);
                                    $myDateTime = new DateTime($govtjob->updated_at);
                                    $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                    
                                ?>
                                    <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                </div>
                            </div>
                            <div class="card-body post-comment" id="post-comment{{ $govtjob->id }}">
                                    <div class="new-comment">
                                        <form action="{{ route('comments.store', ['id' => $govtjob->id]) }}" method="POST">
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
                                    @foreach($govtjob->comments as $comment)
                                    <div class="user-comments">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                    @if(Auth::user()->id == $govtjob->id || Auth::user()->id == $comment->user->id)
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
                                    {{ $govtjobs->links() }}
                                </div>
                                <div class="offset-md-5">				
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- close govt jobs tab --}}





                    {{-- start BCS tab --}}
                    <div class="tab-pane fade" id="nav-bcs" role="tabpanel" aria-labelledby="nav-bcs-tab">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Career & Networking</li>
                                <li class="breadcrumb-item"><a href="#">Career Advice</a></li>
                                <li class="breadcrumb-item active" aria-current="page">BCS</li>
                            </ol>
                        </nav>

                        <hr>

                    @foreach($bcss as $bcs)
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($bcs->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$bcs->user->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">{{ $bcs->user->first_name }}</div>
                                            <div class="text-muted">{{ $bcs->user->department." ".$bcs->user->university_batch }} Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    
                                <h5 class="card-title">{{ $bcs->title }} ( {{ \App\Models\Category\Category::find($bcs->cat_id)->category_name }} )</h5>

                                <p class="card-text">
                                    {{ $bcs->body }}
                                </p>
                    @isset($bcs->avatar)
                        <?php
                        
                            $mime = null;
                            if(isset($bcs->avatar)){
                                $info = new SplFileInfo($bcs->avatar);
                                $mime = $info->getExtension();
                            }
                        ?>
                        @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                <figure class="card-image text-center">
                                    <img src="{{ asset('postsfiles/'.$bcs->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                </figure>
                        @else
                                <div class="card-file">
                                    <a href="{{ route('posts.file.download', ['filename' => $bcs->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $bcs->title }}.{{ $mime }}</a>
                                </div>
                                
                        @endif                            
                    @endisset
                            </div>

                            <div class="card-footer">
                                <div class="float-left">

                                @if(!App\Models\Like\Like::where(['user_id' => Auth::user()->id, 'post_id' => $bcs->id])->first())
                                    <a href="{{ route('likes.store', ['id' => $bcs->id]) }}" class="card-link"><i class="far fa-heart"></i> Like <sup>({{ sizeof($bcs->likes) }})</sup></a>
                                @else
                                    <a href="{{ route('likes.destroy', ['id' => $bcs->id]) }}" class="card-link"><i class="fas fa-heart" style="color:red;"></i> Unlike <sup>({{ sizeof($bcs->likes) }})</sup></a>
                                @endif
                                    <a href="#" class="card-link comment" id="comment{{ $bcs->id }}"><i class="far fa-comments"></i> Comment <sup>({{ sizeof($bcs->comments) }})</sup></a>
                                </div>
                                <div class="float-right">

                                <?php
                                    // $date = date_create($bcs->updated_at);
                                    $myDateTime = new DateTime($bcs->updated_at);
                                    $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                    
                                ?>
                                    <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                </div>
                            </div>
                            <div class="card-body post-comment" id="post-comment{{ $bcs->id }}">
                                    <div class="new-comment">
                                        <form action="{{ route('comments.store', ['id' => $bcs->id]) }}" method="POST">
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
                                    @foreach($bcs->comments as $comment)
                                    <div class="user-comments">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                    @if(Auth::user()->id == $bcs->id || Auth::user()->id == $comment->user->id)
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
                                    {{ $bcss->links() }}
                                </div>
                                <div class="offset-md-5">				
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- close BCS tab --}}


                    {{-- start IDEAS tab --}}
                    <div class="tab-pane fade" id="nav-ideas" role="tabpanel" aria-labelledby="nav-ideas-tab">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Career & Networking</li>
                                <li class="breadcrumb-item"><a href="#">Career Advice</a></li>
                                <li class="breadcrumb-item active" aria-current="page">IDEAS</li>
                            </ol>
                        </nav>

                        <hr>

                    @foreach($ideas as $idea)
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($idea->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$idea->user->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">{{ $idea->user->first_name }}</div>
                                            <div class="text-muted">{{ $idea->user->department." ".$idea->user->university_batch }} Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    
                                <h5 class="card-title">{{ $idea->title }} ( {{ \App\Models\Category\Category::find($idea->cat_id)->category_name }} )</h5>

                                <p class="card-text">
                                    {{ $idea->body }}
                                </p>
                    @isset($idea->avatar)
                        <?php
                        
                            $mime = null;
                            if(isset($idea->avatar)){
                                $info = new SplFileInfo($idea->avatar);
                                $mime = $info->getExtension();
                            }
                        ?>
                        @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                <figure class="card-image text-center">
                                    <img src="{{ asset('postsfiles/'.$idea->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                </figure>
                        @else
                                <div class="card-file">
                                    <a href="{{ route('posts.file.download', ['filename' => $idea->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $idea->title }}.{{ $mime }}</a>
                                </div>
                                
                        @endif                            
                    @endisset
                            </div>

                            <div class="card-footer">
                                <div class="float-left">

                                @if(!App\Models\Like\Like::where(['user_id' => Auth::user()->id, 'post_id' => $idea->id])->first())
                                    <a href="{{ route('likes.store', ['id' => $idea->id]) }}" class="card-link"><i class="far fa-heart"></i> Like <sup>({{ sizeof($idea->likes) }})</sup></a>
                                @else
                                    <a href="{{ route('likes.destroy', ['id' => $idea->id]) }}" class="card-link"><i class="fas fa-heart" style="color:red;"></i> Unlike <sup>({{ sizeof($idea->likes) }})</sup></a>
                                @endif
                                    <a href="#" class="card-link comment" id="comment{{ $idea->id }}"><i class="far fa-comments"></i> Comment <sup>({{ sizeof($idea->comments) }})</sup></a>
                                </div>
                                <div class="float-right">

                                <?php
                                    // $date = date_create($idea->updated_at);
                                    $myDateTime = new DateTime($idea->updated_at);
                                    $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                    
                                ?>
                                    <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                </div>
                            </div>
                            <div class="card-body post-comment" id="post-comment{{ $idea->id }}">
                                    <div class="new-comment">
                                        <form action="{{ route('comments.store', ['id' => $idea->id]) }}" method="POST">
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
                                    @foreach($idea->comments as $comment)
                                    <div class="user-comments">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                    @if(Auth::user()->id == $idea->id || Auth::user()->id == $comment->user->id)
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
                                    {{ $ideas->links() }}
                                </div>
                                <div class="offset-md-5">				
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- close IDEAS tab --}}
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