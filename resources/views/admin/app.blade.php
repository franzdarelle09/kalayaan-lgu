<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.parts.head')
        @yield('head_script')
    </head>
    <body class="sb-nav-fixed">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  
  @if(Session::has('message'))
        <script>
        
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        </script>
    @endif
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
        @yield('script')
    </body>
</html>
