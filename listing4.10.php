// app/routes.php
Route::get('greet', function()
{
  $timeOfDay = date('a');

  return View::make('greet')->with('timeOfDay', $timeOfDay);
});

// app/views/greet.blade.php
<?php if ($timeOfDay == 'am') { ?>
  Good morning, user!
<?php } else { ?>
  Good afternoon, user!
<?php } ?>
