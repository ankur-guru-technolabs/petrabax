<!DOCTYPE html>
<html lang="en">
    <head>
        @include('web.Common.header')
    </head>
    <body>
        @include('web.Common.navbar')
        <div class="site-main-content">
            @yield('content')
            @include('web.Common.contact-us')
        </div>
        @include('web.Common.footer')
        @yield('jscontent')
    </body>
</html>
