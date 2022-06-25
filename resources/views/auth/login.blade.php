@extends('layouts.withoutnav')

@section('title', "| SignIn")

@section('stylesheet')

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
@endsection

@section('content')
    
    <div class="limiter">
        <div class="container-login100">
            <div class="shadow">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{ asset('images/img-02.png') }}" alt="IMG">
                    </div>

                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <!-- <span class="login100-form-title">
                            <h4>Welcome to Leading University Alumini association</h4>
                        </span> -->
                        
                        <span class="login100-form-title">
                            signIn
                        </span>

                        <div class="signin-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

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

                        <div class="signin-input100 validate-input" data-validate = "Password is required">
                            <input id="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required autofocus>

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
                        
                        <div class="p-t-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1">
                                Forgot
                            </span>
                            <a class="txt2" href="{{ route('password.request') }}">
                                username / password?
                            </a>
                        </div>

                        <div class="text-center p-t-40">
                            <a class="txt2" href="{{ route('register') }}">
                                Create your Account
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
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
