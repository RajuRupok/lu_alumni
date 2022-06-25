@extends('admin.layouts.admin_format')

@section('title', '| Alumni List')

@section('navhead', 'ALumni List')

@section('content')
	<!-- Start content -->	
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Alumni List</h4>
                        <p class="card-category"> </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class=" text-primary">
                                    <th>SL.No.</th>

                                    <th>Name</th>

                                    <th>Department</th>

                                    <th>University Id</th>

                                    <th>Graduation year</th>

                                    <th>Action</th>
                                </thead>

                                <tbody>
                                @foreach ($alumnis as $key => $alumni)
                                    
                                    <tr>
                                        <td>{{ $key+1 }}</td>

                                        <td>{{ $alumni->first_name." ".$alumni->last_name }}</td>

                                        <td>{{ $alumni->department }}</td>

                                        <td>{{ $alumni->uniStudentId }}</td>

                                        <td>{{ $alumni->graduation_year }}</td>

                                        <td class="text-primary">

                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('admin.alumni.show', ['id' => $alumni->id]) }}" class="btn btn-info btn-sm">
                                                        <i class="far fa-question-circle"></i>
                                                        view
                                                    </a>
                                                <a href="{{ route('admin.alumni.destroy', ['id' => $alumni->id]) }}" class="btn btn-danger btn-sm" onclick="confirm('Are You Sure to Delete This User...?')">
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