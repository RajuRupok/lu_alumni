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
                            <h2 class="card-title float-left">Programs & Events</h2>
                            <a href="{{ route('admin.events.create') }}"><button class="btn btn-info float-right">Add New Event/Program</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class=" text-primary">
                                        <th>
                                            SL
                                        </th>
                                        <th>
                                            PROGRAM / EVENT NAME
                                        </th>
                                        <th>
                                            DATE
                                        </th>
                                        <th>
                                            LOCATION
                                        </th>
                                                                                                                                                            <th>
                                            ORGANIZED BY
                                        </th>

                                        <th>
                                            ACTION
                                        </th>

                                    </thead>
                                    <tbody>
                                @foreach($events as $key => $event)
                                        <tr>
                                            <td>
                                                {{ $key+1 }}
                                            </td>
                                            <td>
                                                {{ $event->event_name }}
                                            </td>
                                            <td>
                                                {{ $event->event_date }}
                                            </td>
                                            <td>
                                                {{ $event->event_location }}
                                            </td>
                                            <td>
                                                The Banned Community
                                            </td>
                                            <td class="text-primary">

                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('admin.events.show', ['id' => $event->id]) }}" class="btn btn-info btn-sm">
                                                            <i class="far fa-question-circle"></i>
                                                            view
                                                        </a>
                                                    <a href="{{ route('admin.events.destroy', ['id' => $event->id]) }}" class="btn btn-danger btn-sm" onclick="confirm('Are You Sure to Delete This User...?')">
                                                    <i class="far fa-trash-alt"></i>
                                                        Delete
                                                    </a> 
                            
                                                    
                                                </div>
                                            </td>

                                        </tr>
                                @endforeach

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