// app/routes.php
Route::get('greet', function()
{
  $timeOfDay = date('a');

  return View::make('greet')->with('timeOfDay', $timeOfDay);
});

// app/views/greet.blade.php
@if ($timeOfDay == 'am')
  Good morning, user!
@else
  Good afternoon, user!
@endif
