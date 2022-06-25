<meta charset="utf-8" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin_file/img/apple-icon.png') }}">
<link rel="icon" type="image/png" href="{{ asset('admin_file/img/favicon.png') }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>LU_ALumni @yield('title')</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<!-- CSS Files -->
<link href="{{ asset('admin_file/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('admin_file/css/style.css') }}">

@yield('stylesheet')