@extends('admin.layouts.admin_format')

@section('title', '| Depratment')

@section('navhead', '')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-8 offset-md-2">
                    <div class="club-card text-center">
                        <h2>{{ $depth->name }}</h2>
                        <hr>
                        <p>
                            {{ $depth->details }}
                        </p>
                    </div>

                </div>

                <div class="col-md-2">
                   
                </div>

            </div>
        </div>
    </div>
    <!-- close content-->
@endsection

@section('scripts')
@endsection