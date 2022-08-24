<!DOCTYPE html>
<html lang="en">
<head>
   @include('include.head')
</head>
<body>

   <header>
       @include('include.header')
   </header>
   <div>
           @yield('content')
   </div>
   <footer>
       @include('include.footer')
   </footer>

</body>
</html>