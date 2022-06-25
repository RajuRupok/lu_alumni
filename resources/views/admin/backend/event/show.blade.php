@extends('admin.layouts.admin_format')

@section('title', '| Programs & Events')

@section('navhead', 'Programs and Events')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title float-left">{{ $event->event_name }} Events</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>Event name</th>
                                            <td>
                                                {{ $event->event_name }}
                                            </td>
                                        </tr>
                                    @isset($event->club_id)
                                        <tr>
                                            <th>Event club</th>
                                            <td>
                                                {{ \App\Models\Event\Event::find($event->club_id)->club_name }}
                                            </td>
                                        </tr>
                                    @endisset
                                        <tr>
                                            <th>Event locaiton</th>
                                            <td>
                                                {{ $event->event_location }}
                                            </td>
                                        </tr>    
                                        <tr>
                                            <th>Event date</th>
                                            <td>
                                                {{ $event->event_date }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Event details</th>
                                            <td>
                                                {{ $event->event_details }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Event facebook link</th>
                                            <td>
                                                <a href="{{ $event->event_fb_link }}">event facebool link</a>
                                            </td>
                                        </tr>

                                    </thead>
                                    <tbody>
                               

                                    </tbody>
                                </table>
                            </div>
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