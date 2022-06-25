@extends('admin.layouts.admin_format')

@section('title', '| create new clubs')

@section('navhead', 'Add Club')

@section('content')
	<!-- Start content -->			
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">ADD NEW CLUB</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('admin.club.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Club Name</label>
                          <input type="text" class="form-control" name="club_name" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Club Moto</label>
                          <input name="club_moto" type="text" class="form-control" required>
                        </div>
                      </div>
                      
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Club's Facebook Link</label>
                          <input name="club_fb_link" class="form-control" type="url" name="url" id="url"
                                pattern="https://.*" size="30"
                                required>
                        </div>
                      </div>
                      
                      <div class="col-md-8">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Some Info About This Club</label>
                            <textarea name="club_details" class="form-control" rows="3" required></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="file_input_div">
                          <div class="file_input">
                            <label class="image_input_button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
                              <i class="material-icons">file_upload</i>
                              <input id="file_input_file" class="none" type="file" name="club_logo" required/>
                            </label>
                          </div>
                          <div id="file_input_text_div" class="mdl-textfield mdl-js-textfield textfield-demo">
                            <input class="file_input_text mdl-textfield__input" type="text" disabled readonly id="file_input_text" placeholder="add logo" style="
                            background: #202940;
                            margin-top: 37px;
                        "/>
                            <label class="mdl-textfield__label" for="file_input_text"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">ADD CLUB</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
            </div>
          </div>
        </div>
      </div>
      <!--==============add modal=====================-->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <span class="modal-title" id="exampleModalLabel">change your profile pictue</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      
      <!--==============close modal================-->
    <!-- close content-->
@endsection

@section('scripts')

<script>
  var fileInputTextDiv = document.getElementById('file_input_text_div');
var fileInput = document.getElementById('file_input_file');
var fileInputText = document.getElementById('file_input_text');

fileInput.addEventListener('change', changeInputText);
fileInput.addEventListener('change', changeState);

function changeInputText() {
  var str = fileInput.value;
  var i;
  if (str.lastIndexOf('\\')) {
    i = str.lastIndexOf('\\') + 1;
  } else if (str.lastIndexOf('/')) {
    i = str.lastIndexOf('/') + 1;
  }
  fileInputText.value = str.slice(i, str.length);
}

function changeState() {
  if (fileInputText.value.length != 0) {
    if (!fileInputTextDiv.classList.contains("is-focused")) {
      fileInputTextDiv.classList.add('is-focused');
    }
  } else {
    if (fileInputTextDiv.classList.contains("is-focused")) {
      fileInputTextDiv.classList.remove('is-focused');
    }
  }
}
</script>
@endsection