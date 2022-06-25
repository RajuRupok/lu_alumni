@extends('admin.layouts.admin_format')

@section('title', '| Departments')

@section('navhead', 'Departments List')

@section('content')
	<!-- Start content -->
    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Add Any Department</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.departments.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Department Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Some Info About This Department</label>
                                            <textarea class="form-control" rows="3" name="details"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Add Department</button>
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
@endsection