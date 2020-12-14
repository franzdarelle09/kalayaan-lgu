<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.parts.head')
    </head>
    <body class="sb-nav-fixed">
        @include('admin.parts.topnav')
        <div id="layoutSidenav">
            @include('admin.parts.sidenav')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                       
                        @yield('content')
                       
                    </div>
                </main>
                @include('admin.parts.footer')
            </div>
        </div>
        @include('admin.parts.scripts')
    </body>
</html>
