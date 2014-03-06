Route::get('login', function()
{
  return View::make('auth.login');
});

Route::get('logout', function()
{
  return View::make('auth.logout');
});

Route::get('register', function()
{
  return View::make('auth.register');
});
