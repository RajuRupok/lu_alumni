@extends('admin.layouts.admin_format')

@section('title', '| Alumni')

@section('navhead', 'ALumni')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Alumni Profile</h4>
                </div>
                <div class="card-body">
                  <div class="user-details">
                      <table class="table table-bordered">
                          <tbody>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Name:</th>
                                  <td style="text-align: left !important; border-top: 1px solid #b4b4b41a;">{{ $alumni->first_name." ".$alumni->last_name }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Student ID:</th>
                                  <td style="text-align: left !important;">{{ $alumni->uniStudentId }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Department:</th>
                                  <td style="text-align: left !important;">{{ $alumni->department }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Student ID:</th>
                                  <td style="text-align: left !important;">{{ $alumni->email }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Graduation Year:</th>
                                  <td style="text-align: left !important;">{{ $alumni->graduation_year }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Designation:</th>
                                  <td style="text-align: left !important;">{{ $alumni->designation }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Company:</th>
                                  <td style="text-align: left !important;">{{ $alumni->company_name }}</td>
                              </tr>
                              <tr>
                                  <th style="text-align: left !important; width:30%;">Address:</th>
                                  <td style="text-align: left !important;">
                                      {{ $alumni->bio }}
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
                    @if(isset($alumni->avatar))
                      <img class="img" src="{{ asset('images/'.$alumni->avatar) }}" />
                    @else
                    <img class="img" src="{{ asset('admin_file/img/faces/avatar.jpg') }}" />
                    @endif
                    
                  </a>
                  
                </div>
                
                <div class="card-body">
                  <h6 class="card-category">Alumni</h6>
                  <h4 class="card-title">{{ $alumni->first_name.' '.$alumni->last_name }}</h4>
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