@extends('admin.layouts.admin_format')

@section('title', '| users post')

@section('navhead', 'Users Post')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">User's Post</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class=" text-primary">
                                        <th>
                                            USERNAME
                                        </th>
                                        <th>
                                            POST TITLE
                                        </th>
                                        <th>
                                            POST DATE
                                        </th>
                                        <th>
                                            ACTION
                                        </th>

                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            
                                            <td>
                                            <a href="{{ route('show', ['id' => $post->user->id]) }}" target="_blank">{{ $post->user->first_name }}</a>
                                            </td>
                                            <td>
                                                {{ $post->title }}
                                            </td>
                                            <td>
                                                {{-- {{ $post->updated_at }} --}}
                                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->format('Y-m-d') }}
                                            </td>
                                            <td>
                                                
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('admin.userspost.destroy', ['id' => $post->id]) }}" class="btn btn-danger btn-sm">
                                                    <i class="far fa-trash-alt"></i>
                                                        Delete
                                                    </a> 
                            
                                                    <a href="{{ route('admin.userspost.show', ['id' => $post->id]) }}" class="btn btn-info btn-sm">
                                                        <i class="far fa-question-circle"></i>
                                                        Details
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

                {{-- paginate --}}

            </div>
        </div>
    </div>
        
    <!-- close content-->
@endsection

@section('scripts')

@endsection