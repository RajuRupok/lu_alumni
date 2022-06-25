@extends('admin.layouts.admin_format')

@section('title', '| Clubs')

@section('navhead', '')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title float-left">Popular Clubs</h2>
                            <a href="{{ route('admin.club.create') }}"><button class="btn btn-info float-right">Add New Club</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class=" text-primary">
                                        <th>
                                            Club Logo
                                        </th>
                                        <th>
                                            CLUB NAME
                                        </th>
                                        <th>
                                            CLUB MOTO
                                        </th>
                                        <th>
                                            ACTION
                                        </th>

                                    </thead>
                                    <tbody>
                                @foreach($clubs as $club)
                                        <tr>
                                            <td>
                                                    @if($club->club_logo)
                                                    <img class="img" src="{{ asset('images/'.$club->club_logo) }}" height="50px" width="50px" style="border-radius:100%;"/>
                                                    @else
                                                    <img class="img" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" height="50px" width="50px" style="border-radius:100%;"/>
                                                    @endif
                                            </td>
                                            <td>
                                                {{ $club->club_name }}
                                            </td>
                                            <td>
                                                {{ $club->club_moto }}
                                            </td>
                                            <td class="text-primary">

                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('admin.club.show', ['id' => $club->id]) }}" class="btn btn-info btn-sm">
                                                            <i class="far fa-question-circle"></i>
                                                            view
                                                        </a>
                                                    <a href="{{ route('admin.club.destroy', ['id' => $club->id]) }}" class="btn btn-danger btn-sm" onclick="confirm('Are You Sure to Delete This User...?')">
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