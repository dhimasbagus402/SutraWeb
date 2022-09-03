<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

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