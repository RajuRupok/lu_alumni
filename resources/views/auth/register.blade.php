@extends('layouts.withoutnav')

@section('title', "| Register")

@section('stylesheet')

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
@endsection

@section('content')
    
    <div class="limiter">
        <div class="container-login100">
            <div class="shadow">
                <div class="wrap-login100">
                    {{-- <div class="login100-pic js-tilt" data-tilt>
                        <img src="images/img-01.png" alt="IMG">
                    </div> --}}

                    <form class="signup100-form  validate-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        {{-- <span class="login100-form-title">
                            <h4>Welcome to Leading University Alumini association</h4>
                        </span> --}}
                        
                        <span class="login100-form-title p-t-20">
                           Registation
                        </span>
                        <span class="login100-form-title p-t-10">
                        </span>
                        <div class="wrap-input100 validate-input" data-validate = "First Name is required:">
                            <input id="first_name" class="input100 form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required  autofocus>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user"></i>
                                <!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
                            </span>

                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif

                        </div>


                        <div class="wrap-input100 validate-input" data-validate = "Last Name is required:">
                            <input id="last_name" class="input100 form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required  autofocus>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user"></i>
                                <!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
                            </span>
                            
                             @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                    
                            @endif

                        </div>
                       

                        <div class="wrap-input100 ">
                            <input id="uniStudentId" class="input100 form-control{{ $errors->has('uniStudentId') ? ' is-invalid' : '' }} " type="text" name="uniStudentId" placeholder="Student ID" value="{{ old('uniStudentId') }}" required>

                            <span class="focus-input100"></span>

                            <span class="symbol-input100">
                                <i class="fa fa-qrcode" aria-hidden="true"></i>
                            </span>

                            @if ($errors->has('uniStudentId'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('uniStudentId') }}</strong>
                                </span>
                            @endif                            

                        </div>


                        <div class="wrap-input100 ">
                            <input id="department" class="input100 form-control{{ $errors->has('department') ? ' is-invalid' : '' }} " type="text" name="department" placeholder="Department" value="{{ old('department') }}" required>

                            <span class="focus-input100"></span>

                            <span class="symbol-input100">
                                <i class="fa fa-qrcode" aria-hidden="true"></i>
                            </span>

                            @if ($errors->has('department'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                            @endif                            

                        </div>


                        <div class="wrap-input100 ">
                            <input id="university_batch" class="input100 form-control{{ $errors->has('university_batch') ? ' is-invalid' : '' }} " type="number" name="university_batch" placeholder="Batch" value="{{ old('university_batch') }}" required>

                            <span class="focus-input100"></span>

                            <span class="symbol-input100">
                                <i class="fa fa-qrcode" aria-hidden="true"></i>
                            </span>

                            @if ($errors->has('university_batch'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('university_batch') }}</strong>
                                </span>
                            @endif                            

                        </div>
                        


                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input id="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus >
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input id="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" value="{{ old('password') }}" required autofocus >
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>


                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input id="password-confirm" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" placeholder="Re-enter Password" value="{{ old('password') }}" required autofocus>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                {{ __('Register') }}
                            </button>
                        </div>



                        <div class="text-center p-t-40">
                            <span class="txt1">
                                You have a account? 
                            </span>
                            <a class="txt2" href="{{ route('login') }}">
                                 signin
                                {{-- <i class="fa fa-arrow-right m-l" aria-hidden="true"></i> --}}
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')
<!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
