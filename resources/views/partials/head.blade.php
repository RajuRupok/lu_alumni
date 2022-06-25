<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">


<title>LU_ALumni @yield('title')</title>
<link rel="shortcut icon" href="{{asset('images/logo1.png')}}" />

{{-- If Importent to add some css files --}}


<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=El+Messiri:400,500,600,700" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">





{{-- ================< Bootstrap CSS Starts >============== --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
{{-- =================< Bootstrap CSS Ends >=============== --}}


@yield('stylesheet')
{{-- ================< Custom CSS Starts >============== --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
{{-- =================< Custom CSS Ends >=============== --}}