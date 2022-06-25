@extends('layouts.withnav')

@section('title', '| your messages')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}">

    <style>
        body{
            overflow: hidden;
        }
        .message-part{
            padding-top: 100px;
            /* padding-bottom: 100px; */
        }
        footer{
            display: none;
        }
        .form-group{
            margin-bottom: 10px;
        }
        .form-group .form-control{
            border-radius: 10px;
            width: 90%;
            margin-left: 5%;
        }
        .conversation{
            background: #ffffff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection

@section('content')

<section class="message-part">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="messenger-body">
                    <chat-app :user="{{ Auth::user() }}"></chat-app>
                </div>
            </div>
        </div>

        {{-- <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <span style="font-size: 20px; color:green;">{{ Auth::user()->first_name }}</span> Messages
                    </div>
                    <div class="card-body">
                        <chat-app :user="{{ Auth::user() }}"></chat-app>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>

@endsection 
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script >
    $(".contacts-list, .feed").niceScroll();
</script>



@endsection