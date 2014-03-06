// app/routes.php
Route::get('users', function()
{
  $users = array(
    'User 1',
    'User 2',
    'User 3',
    'User 4'
  );

  return View::make('users')->with('users', $users);
});

// app/views/users.blade.php
@foreach($users as $user)
  <p>{{ $user }}</p>
@endforeach
