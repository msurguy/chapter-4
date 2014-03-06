// app/routes.php
Route::get('blog', function()
{
  return View::make('blog');
});

// app/views/blog.blade.php
...
@include('navigation')

My Laravel blog
...

// app/views/navigation.blade.php
<nav>
  <ul>
    <li><a href="/home">Home</a></li>
    <li><a href="/blog">Blog</a></li>
  </ul>
</nav>

// Resulting HTML
<nav>									
  <ul>									
    <li><a href="/home">Home</a></li>					
    <li><a href="/blog">Blog</a></li>					
  </ul>									
</nav>									
My Laravel blog
