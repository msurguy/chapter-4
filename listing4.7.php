// File app/routes.php
Route::get('login', function()
{
  $date = date('Y-m-d');
  $time = date('H:i:s');

  return View::make('login')->with('date', $date)->with('time', $time);
});

// File app/views/login.php
Current date: <?php echo($date); ?> <br>
Current time <?php echo($time); ?>

<form action="login" method="post">
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password">
  <input type="submit" value="Login">
</form>
