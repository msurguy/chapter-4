// app/routes.php
Route::get('hello', function()
{
  $name = 'John';
  return View::make('hello')->with('name', $name);
});

// app/views/hello.blade.php
Hello, <?php echo($name); ?>
<br>
Hello, {{ $name }}

// Result :
Hello, John
Hello, John
