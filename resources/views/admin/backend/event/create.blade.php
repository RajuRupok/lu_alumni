@extends('admin.layouts.admin_format')

@section('title', '| create programs & events')

@section('navhead', 'ADD Programs or Events')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('admin_file/css/nice-select.css') }}" />
@endsection

@section('content')
    <!-- Start content -->
	      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Any Program/Event</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('admin.events.store') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Program/Event Title</label>
                          <input type="text" class="form-control" name="event_name" required>
                        </div>
                      </div>
					  <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Organized By</label>
                          <select name="club_id">
                            <option data-display="Select" value="{{ null }}">Nothing</option>
                          @foreach($clubs as $club)
                            <option value="{{ $club->id }}">{{ $club->club_name }}</option>
                          @endforeach
                          </select>
                      
                        </div>
                      </div>
					  <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Program/Event Date</label>
                          <div class='input-group date' id='datetimepicker1'>
                              {{-- <input type='text' class="form-control" name="event_date" required />
                              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                              </span> --}}
                              <input type="date" id="start" name="event_date" value="2018-07-22" min="2001-01-01" max="2050-12-31" width="100%">
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Program/Event Location</label>
                          <input type="text" class="form-control" name="event_location" required>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Program/Events Facebook Link</label>
                          <input type="text" class="form-control" name="event_fb_link" required>
                        </div>
                      </div>
					  
					  <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Some Info About This Program/Event</label>
                            <textarea class="form-control" rows="3" name="event_details" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add Program/Event</button>
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
	
    <!-- close content-->
@endsection

@section('scripts')
<script src="{{ asset('admin_file/js/jquery.nice-select.min.js') }}"></script>
<script>
$(document).ready(function() {
  $('select').niceSelect();
});
</script>

{{-- <script>
 $(function () {
   var bindDatePicker = function() {
		$(".date").datetimepicker({
        format:'YYYY-MM-DD',
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-arrow-up",
				down: "fa fa-arrow-down"
			}
		}).find('input:first').on("blur",function () {
			// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
			// update the format if it's yyyy-mm-dd
			var date = parseDate($(this).val());

			if (! isValidDate(date)) {
				//create date based on momentjs (we have that)
				date = moment().format('YYYY-MM-DD');
			}

			$(this).val(date);
		});
	}
   
   var isValidDate = function(value, format) {
		format = format || false;
		// lets parse the date to the best of our knowledge
		if (format) {
			value = parseDate(value);
		}

		var timestamp = Date.parse(value);

		return isNaN(timestamp) == false;
   }
   
   var parseDate = function(value) {
		var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
		if (m)
			value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

		return value;
   }
   
   bindDatePicker();
 });

</script> --}}
@endsection