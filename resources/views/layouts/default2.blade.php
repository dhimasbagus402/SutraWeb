<!DOCTYPE html>
<html lang="en">
<head>
   @include('adminpanel.head2')
</head>

<body class="sb-nav-fixed">

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