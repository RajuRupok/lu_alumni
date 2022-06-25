<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body>
    <div id="app">

        {{-- @include('partials.nav') --}}

        <main>
            @yield('content')
        </main>
        
    </div>

    @include('partials.javascript')
    

</body>
</html>
