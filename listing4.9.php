// app/routes.php
Route::get('hack', function()
{
  $data = "<script>alert('My hack');</script>";
  return View::make('hack')->with('data', $data);
});

// app/views/hack.blade.php
The data: {{{ $data }}}

// Result :
The data: &lt;script&gt;alert(&#039;My hack&#039;);&lt;/script&gt;
