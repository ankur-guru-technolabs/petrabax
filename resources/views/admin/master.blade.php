<!DOCTYPE html>
<html lang="en">
    @include('admin.Common.header')
    <body>
        @if(Auth::guest())
            <div class="admin-sidein-section">
        @else
            <div class="admin-dashboard-main">
                @include('admin.Common.sidebar')
        @endif
                @yield('content')
            </div>
            @include('admin.Common.footer')
            @yield('jscontent')
    </body>
</html>
