<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{!! NoCaptcha::renderJs() !!}
   
<head>
   @include('adminpanel.head2')
</head>

<body>

    <div id="layoutSidenav_content">
       @include('adminpanel.header2')
    </div>
   <div>
           @yield('content2')
   </div>
   <footer>
       @include('adminpanel.footer2')
   </footer>

</body>
</html>