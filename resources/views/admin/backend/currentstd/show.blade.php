@extends('admin.layouts.admin_format')

@section('title', '| Current Student')

@section('navhead', 'Current Student')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Current Student Profile</h4>
                </div>
                <div class="card-body">
                  <div class="user-details">
                      <table class="table table-bordered">
                          <tbody>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Name:</th>
                                  <td style="text-align: left !important; border-top: 1px solid #b4b4b41a;">{{ $current->first_name." ".$current->last_name }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Student ID:</th>
                                  <td style="text-align: left !important;">{{ $current->uniStudentId }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Department:</th>
                                  <td style="text-align: left !important;">{{ $current->department }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Student ID:</th>
                                  <td style="text-align: left !important;">{{ $current->email }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Graduation Year:</th>
                                  <td style="text-align: left !important;">{{ $current->graduation_year }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Designation:</th>
                                  <td style="text-align: left !important;">{{ $current->designation }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Company:</th>
                                  <td style="text-align: left !important;">{{ $current->company_name }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Address:</th>
                                  <td style="text-align: left !important;">
                                      {{ $current->bio }}
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    @if(isset($current->avatar))
                      <img class="img" src="{{ asset('images/'.$current->avatar) }}" />
                    @else
                    <img class="img" src="{{ asset('admin_file/img/faces/avatar.jpg') }}" />
                    @endif
                    
                  </a>
                  
                </div>
                
                <div class="card-body">
                  <h6 class="card-category">current</h6>
                  <h4 class="card-title">{{ $current->first_name.' '.$current->last_name }}</h4>
                  <p class="card-description">
                      He is a fantastic Guy...
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- close content-->
@endsection

@section('scripts')
@endsection