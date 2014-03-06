// File app/routes.php
Route::get('login', function()
{
  $data = array('currentDateTime' => date('Y-m-d H:i:s'));
  return View::make('login', $data);
});

// File app/views/login.php
Current date and time: <br>
<?php echo($currentDateTime); ?>

<form action="login" method="post">
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password">
  <input type="submit" value="Login">
</form>
