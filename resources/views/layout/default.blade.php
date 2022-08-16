<!DOCTYPE html>
<html lang="en">
<head>
   @include('include.head')
</head>
<body>

   <header class="row">
       @include('include.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer>
       @include('include.footer')
   </footer>

</body>
</html>