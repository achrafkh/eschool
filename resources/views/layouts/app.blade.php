<!DOCTYPE html>
<html>
    @include('layouts.partials.header')
    <body>
        @include('partials.header')
        @yield('content')
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>