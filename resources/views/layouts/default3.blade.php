<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
<head>
   @include('adminpanel.head3')
</head>

<body>

    <div id="layoutSidenav_content">
       @include('adminpanel.header3')
    </div>
   <div>
           @yield('content3')
   </div>
   <footer>
       @include('adminpanel.footer3')
   </footer>

</body>
</html>