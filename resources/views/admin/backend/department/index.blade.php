@extends('admin.layouts.admin_format')

@section('title', '| Departments')

@section('navhead', 'Departments List')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title float-left">Departments</h2>
                            <a href="{{ route('admin.departments.create') }}"><button class="btn btn-info float-right">Add New Department</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class=" text-primary">
                                        <th>
                                            Sl.
                                        </th>
                                        <th>
                                            DEPARTMENT NAME
                                        </th>
                                        <th>
                                            ACTION
                                        </th>

                                    </thead>
                                    <tbody>
                                @foreach($depths as $key => $depth)
                                        <tr>
                                            <td>
                                                {{ $key+1 }}
                                            </td>
                                            <td>
                                                {{ $depth->name }}
                                            </td>

                                            <td class="text-primary">

                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('admin.departments.show', ['id' => $depth->id]) }}" class="btn btn-info btn-sm">
                                                            <i class="far fa-question-circle"></i>
                                                            view
                                                        </a>
                                                    <a href="{{ route('admin.departments.destroy', ['id' => $depth->id]) }}" class="btn btn-danger btn-sm" onclick="confirm('Are You Sure to Delete This User...?')">
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