@extends('layouts.withnav')

@section('title', '| your profile')

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
                        <img src="{{ asset('user_files/'.$user->avatar) }}" alt="user image" class="img-responsive">
                    @else
                        <img src="{{ asset('user_files/default.png') }}" alt="user image" class="img-responsive">
                    @endif
                    </figure>

                    <a href="#" class="btn btn-outline-dark btn-block btn-edit-profile" id="editProfileBtn" style="border-radius: 0px;">Edit Profile</a>

                    @if (isset($user->company_name) || isset($user->designation))
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
                                @if (isset($user->designation))
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

            <div class="col-md-4 user-details-edit d-none">
                <div class="user-profile">
                    <form action="{{ route('user_profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="group" style="padding-top: 1px;">
                            <div class="avatar-upload about">
                                <div class="avatar-edit">
                                    <input type='file' name="avatar" id="profilePictureUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="profilePictureUpload"><i class="fas fa-pencil-alt"></i></label>
                                </div>
                                <div class="avatar-preview">
                                    @if(isset($user->avatar))
                                        <div id="profilePicturePreview" style="background-image: url(' {{ asset('user_files/'.$user->avatar) }} '); background-size: cover;"></div>
                                    @else
                                        <div id="profilePicturePreview" style="background-image: url(' {{ asset('user_files/default.png') }} '); background-size: cover;"></div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="cancle-btn">
                            <a href="#" class="btn btn-outline-light btn-cancle"><i class="fas fa-undo-alt"></i></a>
                        </div>

                        <div class="work-link" style="padding-top: 0px !important;">
                            <h6 class="text-muted">WORK LINKS</h6>
                            <table class="table table-bordered">
                                <tr>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" value="{{ $user->company_name }}" type="text" placeholder="Company Name">
                                        @if ($errors->has('company_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('company_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" value="{{ $user->designation }}" type="text" placeholder="Designation">
                                        @if ($errors->has('designation'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('designation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </tr>
                            </table>
                        </div>

                        <div class="personal-info" style="padding-top: 0px !important;">
                            <h6 class="text-muted">PERSONAL INFO</h6>
                            <table class="table table-bordered">
                                <tr>
                                    <div class="form-group">
                                        <textarea class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}" name="bio" rows="2" placeholder="Present Address">{{ $user->bio }}"</textarea>
                                        @if ($errors->has('bio'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('bio') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ $user->department }}" type="text" placeholder="Department">
                                        @if ($errors->has('department'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('department') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('university_batch') ? ' is-invalid' : '' }}" name="university_batch" value="{{ $user->university_batch }}" type="text" placeholder="Batch">
                                        @if ($errors->has('university_batch'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('university_batch') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </tr>
                                {{-- <tr>
                                    <div class="form-group">
                                        <input class="form-control" name="graduation_year" value="{{ $user->graduation_year }}" type="text" placeholder="Graduation Year">
                                    </div>
                                </tr> --}}
                                <tr>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" type="text" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ $user->mobile }}" type="text" placeholder="Mobile">
                                        @if ($errors->has('mobile'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('li_link') ? ' is-invalid' : '' }}" name="li_link" value="{{ $user->li_link }}" type="text" placeholder="https://www.linkedin.com/in/user-name/">
                                        @if ($errors->has('li_link'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('li_link') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('fb_link') ? ' is-invalid' : '' }}" name="fb_link" value="{{ $user->fb_link }}" type="text" placeholder="https://www.facebook.com/user.name">
                                        @if ($errors->has('fb_link'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fb_link') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <input class="form-control{{ $errors->has('tw_link') ? ' is-invalid' : '' }}" name="tw_link" value="{{ $user->tw_link }}" type="text" placeholder="https://twitter.com/user_name">
                                        @if ($errors->has('tw_link'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tw_link') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </tr>
                            </table>
                            
                            <button type="submit" class="btn btn-outline-dark btn-block btn-update-profile" id="updateProfileBtn" style="border-radius: 30px;">Update Profile</button>
                            
                        </div>
                    </form>                    
                </div>
            </div>

            {{--  Right Part  --}}

        @if($user->graduation_year < date('Y'))
            <div class="col-md-8">
                <div class="profile-details">
                    <div class="row">
                        <div class="col-md-12" style="margin-top:-9%">

                            <div class="posts card gedf-card alumni-post">
                                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="new-post">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="postTitle" placeholder="Your Post Title" name="title" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="cat_id" required>
                                                        <option data-display="Select Category">Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?" name="body" required></textarea>

                                            <input accept="image/*, image/heic, image/heif, .pdf, .doc, .docx" type="file" class="hide inputfile" id="upload" data-multiple-caption="{count} files selected" multiple name="avatar" />
                                            <label for="upload"><span><i class="fas fa-file-medical"></i> File</span> </label>
                                            <button type="submit" class="btn btn-outline-info btn-share float-right">Share</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        @foreach($posts as $post)
                            <div class="posts card gedf-card alumni-post">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-2">
                                                @if($post->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('user_files/'.$post->user->avatar) }}" alt="">
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
                                    <div class="edit-btn">
                                        <button class="btn btn-light btn-sm editbtn" id="editBtn{{ $post->id }}"><i class="fas fa-pencil-alt"></i></button>
                                    </div>
                                    <div class="delete-btn">
                                        <a href="{{ route('posts.destroy', ['id' => $post->id]) }}" class="btn btn-light btn-sm deleteBtn" id="deleteBtn"><i class="fas fa-trash-alt"></i></a>
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
                                <div class="card-body d-none" id="editPost{{ $post->id }}">
                                    <form action="{{ route('posts.update',['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="new-post">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="postTitle" placeholder="Your Post Title" name="title" value="{{ $post->title }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="cat_id">
                                                        <option data-display="Select Category">Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" @if($post->cat_id == $category->id) selected @endif>{{ $category->category_name }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?" name="body">{{ $post->body }}</textarea>

                                            <input accept="image/*, image/heic, image/heif, .pdf, .doc, .docx" type="file" class="hide inputfilepost" id="upload{{ $post->id }}" data-multiple-caption="{count} files selected" multiple name="avatar" value="{{ $post->avatar }}"/>
                                            <label for="upload{{ $post->id }}" id="inputstyle"><span id="span{{ $post->id }}"><i class="fas fa-file-medical"></i> File</span> </label>

                                            <button class="btn btn-outline-info btn-share float-right btn-sm" type="submit">Update</button>
                                            <button class="btn btn-info btn-share float-right btn-sm cancelbtn" style="margin-right: 5px;" id="cancelBtn{{ $post->id }}" type="button">Cancel</button>
                                            
                                        </div>
                                    </form>
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
