@extends('layouts.withnav')

@section('title', '| view profile')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fire-css/assets/faq.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}">
    <style>
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }
        
        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }
        
        .avatar-upload .avatar-edit input {
            display: none;
        }
        
        .avatar-upload .avatar-edit input + label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }
        
        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }
        
        .avatar-upload .avatar-edit input + label i.fas.fa-pencil-alt {
            padding: 9px;
        }
        
        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }
        
        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .social-icon-links a:nth-child(1){
            color: #0077B5;
            border: 1px solid #0077B5;
            font-weight: 100;
        }
        .social-icon-links a:nth-child(1):hover{
            background-color: #0077B5;
            color: #ffffff;
            border: 1px solid #0077B5;
            font-weight: 100;
        }
        .social-icon-links a:nth-child(2){
            padding: 4px 11px;
            color: #3b5999;
            border: 1px solid #3b5999;
            font-weight: 100;
        }
        .social-icon-links a:nth-child(2):hover{
            background-color: #3b5999;
            color: #ffffff;
            border: 1px solid #3b5999;
            font-weight: 100;
        }
        .social-icon-links a:nth-child(3){
            color: #55acee;
            border: 1px solid #55acee;
            font-weight: 100;
        }
        .social-icon-links a:nth-child(3):hover{
            background-color: #55acee;
            color: #ffffff;
            border: 1px solid #55acee;
            font-weight: 100;
        }
    </style>
@endsection

@section('content')

<section class="profile-part">
    <div class="container">
        <div class="row">
            {{--  Left Part  --}}
            <div class="col-md-4 user-details-show">
                <div class="user-profile">
                    <figure class="profile-pic">
                    @if(isset($user->avatar))
                        <img src="{{ asset('user_profile/'.$user->avatar) }}" alt="user image" class="img-responsive">
                    @else
                        <img src="{{ asset('user_files/default.png') }}" alt="user image" class="img-responsive">
                    @endif
                    </figure>

                    @if (isset($user->company_name))
                    <div class="work-link">
                        <h6 class="text-muted">WORK LINKS</h6>
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-muted">Company</th>
                                @if (isset($user->company_name))
                                    <td><a href="#">{{ $user->company_name }}</a></td>
                                @else
                                    <td class="d-none">Nothing To Display...</td>
                                @endif
                            </tr>
                            <tr>
                                <th class="text-muted">Designation</th>
                                @if (isset($user->company_name))
                                    <td><a href="#">{{ $user->designation }}</a></td>
                                @else
                                    <td class="d-none">Nothing To Display...</td>
                                @endif
                            </tr>
                        </table>
                    </div>
                    @else
                        <div class="d-none">
                            <p>If There is no information, it will be hidden...</p>
                        </div>
                    @endif

                    <div class="personal-info">
                        <h6 class="text-muted">PERSONAL INFO</h6>
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-muted">Current Living Place</th>
                                @if (isset($user->bio))
                                    <td><a href="#">{{ $user->bio }}</a></td>
                                @else
                                    <td class="d-none">Nothing To Display...</td>
                                @endif
                            </tr>
                            <tr>
                                <th class="text-muted">Department</th>
                                <td><a href="#">{{ $user->department }}</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Batch</th>
                                <td><a href="#">{{ $user->university_batch }}</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Graduation Year</th>
                                <td><a href="#">{{ $user->graduation_year }}</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Email</th>
                                <td><a href="#">{{ $user->email }}</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Mobile</th>
                                @if (isset($user->mobile))
                                    <td><a href="#">{{ $user->mobile }}</a></td>
                                @else
                                    <td class="d-none">Nothing To Display...</td>
                                @endif
                            </tr>
                            <tr>
                                <th class="text-muted">Social</th>
                                <td class="social-icon-links">
                                    @if (isset($user->li_link))
                                    <a href="{{ $user->li_link }}" target="_blank" class="btn btn-light btn-sm"><i class="fab fa-linkedin-in"></i></a>
                                    @else
                                        <td class="d-none">Nothing To Display...</td>
                                    @endif

                                    @if (isset($user->fb_link))
                                    <a href="{{ $user->fb_link }}" target="_blank" class="btn btn-light btn-sm"><i class="fab fa-facebook-f"></i></a>
                                    @else
                                        <td class="d-none">Nothing To Display...</td>
                                    @endif

                                    @if (isset($user->tw_link))
                                    <a href="{{ $user->tw_link }}" target="_blank" class="btn btn-light btn-sm"><i class="fab fa-twitter"></i></a>
                                    @else
                                        <td class="d-none">Nothing To Display...</td>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>                    
                </div>
            </div>

            {{--  Right Part  --}}

        @if($user->graduation_year < date('Y'))
            <div class="col-md-8">
                <div class="profile-details">
                    <div class="row">
                        <div class="col-md-12" style="margin-top:-9%">

                        @foreach($posts as $post)
                            <div class="posts card gedf-card alumni-post">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-2">
                                                @if($post->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('images/'.$post->avatar) }}" alt="">
                                                @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                                @endif
                                                
                                            </div>
                                            <div class="ml-2">
                                                <div class="h5 m-0">{{ $post->user->first_name }}</div>
                                                <div class="text-muted">{{ $post->user->department." ".$post->user->university_batch }} Batch</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" id="viewPost{{ $post->id }}">
                                    
                                    <h5 class="card-title">{{ $post->title }} ( {{ \App\Models\Category\Category::find($post->cat_id)->category_name }} )</h5>

                                    <p class="card-text">
                                        {{ $post->body }}
                                    </p>
                        @isset($post->avatar)
                            <?php
                            
                                $mime = null;
                                if(isset($post->avatar)){
                                    $info = new SplFileInfo($post->avatar);
                                    $mime = $info->getExtension();
                                }
                            ?>
                            @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                    <figure class="card-image text-center">
                                        <img src="{{ asset('postsfiles/'.$post->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                    </figure>
                            @else
                                    <div class="card-file">
                                        <a href="{{ route('posts.file.download', ['filename' => $post->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $post->title }}.{{ $mime }}</a>
                                    </div>
                                    
                            @endif                            
                        @endisset
                                </div>
                                <div class="card-footer">
                                    <div class="float-left">
                                    
                                    @if(!App\Models\Like\Like::where(['user_id' => Auth::user()->id, 'post_id' => $post->id])->first())
                                        <a href="{{ route('likes.store', ['id' => $post->id]) }}" class="card-link"><i class="far fa-heart"></i> Like <sup>({{ sizeof($post->likes) }})</sup></a>
                                    @else
                                        <a href="{{ route('likes.destroy', ['id' => $post->id]) }}" class="card-link"><i class="fas fa-heart" style="color:red;"></i> Unlike <sup>({{ sizeof($post->likes) }})</sup></a>
                                    @endif

                                        <a href="#" class="card-link comment" id="comment{{ $post->id }}"><i class="far fa-comments"></i> Comment <sup>({{ sizeof($post->comments) }})</sup></a>
                                    </div>
                                    <div class="float-right">

                                    <?php
                                        // $date = date_create($post->updated_at);
                                        $myDateTime = new DateTime($post->updated_at);
                                        $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                        
                                    ?>
                                        <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                    </div>
                                </div>
                                <div class="card-body post-comment" id="post-comment{{ $post->id }}">
                                    <div class="new-comment">
                                        <form action="{{ route('comments.store', ['id' => $post->id]) }}" method="POST">
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
                                    @foreach($post->comments as $comment)
                                    <div class="user-comments">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                @if(Auth::user()->id == $post->id || Auth::user()->id == $comment->user->id)
                                                <a href="{{ route('comments.destroy', ['id'=>$comment->id]) }}" class="btn btn-light btn-sm comment-delete" id="dltCmnt"><i class="fas fa-trash-alt"></i></a>
                                                @endif
                                                <div class="mr-2">
                                                @if($comment->user->avatar)
                                                    <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('images/'.$comment->user->avatar) }}" alt="">
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
                                        {{ $posts->links() }}
                                    </div>
                                    <div class="offset-md-5">				
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-md-8">
                <div class="profile-details">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="posts card gedf-card alumni-post">
                                <div class="card-body text-center">
                                    <h3>
                                        You are not allowed to post yet. Thank you !!!
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </div>
    </div>
</section>

@endsection

@section('scripts')

<script src="{{ asset('js/nice-select.js') }}"></script>
<script >
    
    $(document).ready(function() {
        $('select').niceSelect();
    });
</script>

<script>
    $(function(){
        $("#editProfileBtn").click(function(){
            $('.user-details-edit').removeClass('d-none');
            $('.user-details-show').addClass('d-none');
        });
        $(".btn-cancle").click(function(){
            $('.user-details-edit').addClass('d-none');
            $('.user-details-show').removeClass('d-none');
        });
    });
</script>

<script>
    //For Changing About Image
    $(".avatar-upload.about").ready(function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#profilePicturePreview').css('background-image', 'url('+e.target.result +')');
                    $('#profilePicturePreview').hide();
                    $('#profilePicturePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        $("#profilePictureUpload").change(function() {
            readURL(this);
        });
    });
</script>
@endsection
