// app/views/layout.blade.php
...
<header> Header </header>
@yield('content')								
@yield('moreContent')							
@yield('evenMoreContent')							
<footer> Copyright, {{ date('Y') }} </footer>
...

// app/views/home.blade.php
@extends('layout')

@section('content')
  <p>This is just Content</p>
@stop

@section('moreContent')
  <p>This is More Content</p>
@stop

@section('evenMoreContent')
  <p>This is Even More Content</p>
@stop

// Resulting HTML that will be displayed
<!doctype html>								
<html lang="en">								
<head>									
  <meta charset="UTF-8">							
  <title>My Laravel application</title>  				
</head>									
<body>									
  <header> Header </header>

  <p>This is just Content</p>
  <p>This is More Content</p>
  <p>This is Even More Content</p>

  <footer> Copyright, 2014 </footer>
</body>									
</html>
