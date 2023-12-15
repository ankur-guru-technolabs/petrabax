<!DOCTYPE html>
<html lang="en">
    <head>
        @include('web.common.header')
    </head>
    <body>
        @include('web.common.navbar')
        <div class="site-main-content">
            @yield('content')
            @include('web.common.contact-us')
        </div>
        @include('web.common.footer')
    </body>
</html>
