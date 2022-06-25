@extends('admin.layouts.admin_format')

@section('title', '| admin profile')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('admin_file/css/admin_image.css') }}">
@endsection

@section('navhead', 'profile')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Profile</h4>
                        <p class="card-category">Complete your profile</p>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.profile.update', ['id' => Auth()->guard('admin')->user()->id ]) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">{{ $admin->postion }}</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $admin->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tell something about you</label>
                                            <textarea class="form-control" rows="5" name="description" required>{{ $admin->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo" type="button" data-toggle="modal" data-target="#exampleModal">
                            @if($admin->avatar)
                            <img class="img" src="{{ asset('images/'.$admin->avatar) }}" />
                            @else
                            <img class="img" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" />
                            @endif
                        </a>

                    </div>

                    <div class="card-body">
                        <h6 class="card-category">{{ $admin->postion }}</h6>
                        <h4 class="card-title">{{ $admin->name }}</h4>
                        <p class="card-description">
                            {{ $admin->description }}
                        </p>
                        {{-- <a href="#pablo" class="btn btn-primary btn-round">Follow</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============add modal=====================-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document" >
    
        <div class="modal-content">
          <form enctype="multipart/form-data" action="{{ route('admin.profile.imagestore', ['id' => Auth()->guard('admin')->user()->id]) }}" method="POST">
              @csrf
            <div class="modal-header">
                <span class="modal-title" id="exampleModalLabel">change your profile pictue</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-2 offset-4">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" name="avatar" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview"
                              @if($admin->avatar)
                              style="background-image: url({{ asset('images/'.$admin->avatar) }});"
                              @else
                              style="background-image: url(http://www.juliehamilton.ca/resources/finance-icon-2.png);" @endif>
                            </div>
                        </div>
                    </div>

                </div>
              </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      
    </div>
</div>

<!--==============close modal================-->

<!-- close content-->
@endsection 

@section('scripts')

<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imageUpload").change(function() {
    readURL(this);
  });

</script>
@endsection