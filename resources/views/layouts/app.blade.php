<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('layouts.head')
   </head>
     <body>
 
         @include('layouts.header')
        @yield('index')
        @include('layouts.footer')
  </html>
