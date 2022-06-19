<html>
    <head>
        <title>Lys Fleuri</title>
        @include('layouts.meta')
        @include('layouts.css')
    </head>
    <body>
        @include('layouts.header')
        <main class = belowburger> 
            @yield('main')
            @include('layouts.footer')
            
        </main>
        @yield('js')
    </body>
</html>