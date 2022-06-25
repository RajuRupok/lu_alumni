@extends('layouts.withnav') 

@section('title', '| all alumni user') 
@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <style>
        img.mr-3{
            border-radius: 10px;
            max-width: 150px;
            min-width: 150px;
        }
        .card{
            border: 0px solid;
            box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        h4{
            color: #04a653;
        }
        h6{
            color: #252525;
        }
    </style>
@endsection

@section('content')

<section class="career-advice-part">
    <div class="container">
        <div class="row">
            @foreach ($users as $user)
            <div class="col-md-6">
                <a href="{{route('user_profile.show', ['id'=>$user->id])}}">
                    <div class="card user">
                        <div class="card-body">
                            <div class="media">
                                @if (isset($user->avatar))
                                <img src="{{asset('user_files/'.$user->avatar)}}" class="mr-3">
                                @else
                                <img src="{{asset('images/graduate.png')}}" class="mr-3">
                                @endif
                                <div class="media-body">
                                    <h4 class="user-name">{{ $user->first_name. " ". $user->last_name }}</h4>
                                    <h6>{{ $user->department }} Department</h6>
                                    <h6>{{ $user->university_batch }} Batch</h6>
                                    <h6>Graduation Year {{ $user->graduation_year }}</h6>
                                    <h6>
                                        @isset($user->designation)
                                        {{ $user->designation }}
                                        @endisset
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2 offset-md-5">
                        {{ $users->links() }}
                    </div>
                    <div class="offset-md-5">				
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection @section('scripts')

@endsection