<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.partials.admin_head')
</head>
<body class="dark-edition">
  <div class="wrapper">
    @include('admin.partials.admin_sidebar')
    <div class="main-panel">
        @include('admin.partials.admin_nav')

        {{-- <main> --}}
            @yield('content')
        {{-- </main> --}}
        @include('admin.partials.admin_footer')
    </div>

    {{-- <div id="admin-app" > --}}

        

    {{-- </div> --}}

  </div>    

  @include('admin.partials.admin_fixedplugin')
  
  @include('admin.partials.admin_javasript')    

</body>
</html>
