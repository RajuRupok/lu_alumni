@extends('admin.layouts.admin_format')

@section('title', '| Clubs')

@section('navhead', '')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="club-card text-center">
                        @if($club->club_logo)
                        <img class="img" src="{{ asset('images/'.$club->club_logo) }}" height="150px" width="150px" style="border-radius:100%;"/>
                        @else
                        <img class="img" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" height="150px" width="150px" style="border-radius:100%;"/>
                        @endif

                        <h3>{{ $club->club_name }}</h3>
                        <h5>{{ $club->club_moto }}</h5>
                        <ul class="social-list text-center">
                                <li><a href="{{ $club->club_fb_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="club-card text-center">
                        <h2>Club details</h2>
                        <hr>
                        <p>
                            {{ $club->club_details }}
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- close content-->
@endsection

@section('scripts')
@endsection