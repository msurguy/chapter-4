// app/routes.php
Route::get('/', function()
{
  return View::make('home');
});

// app/views/layout.blade.php
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Laravel application</title>
</head>
<body>
  <header> Header </header>
  @yield('content')
  <footer> Copyright, {{ date('Y') }} </footer>
</body>
</html>

// app/views/home.blade.php
@extends('layout')

@section('content')
  This is the home page
@stop
