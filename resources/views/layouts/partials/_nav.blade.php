<nav class="navbar navbar-expand-lg fixed-static-top navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand mr-auto mr-lg-0" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse " id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ set_active_route('root_path') }}">
        <a class="nav-link" href="{{ route('root_path') }}">Home</a>
      </li>
      <li class="nav-item {{ set_active_route('about_path') }}">
        <a class="nav-link" href="{{ route('about_path') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Artisans</a>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="https://laravel.com" target="_blank">Laravel</a>
          <a class="dropdown-item" href="https://laravel.io" target="_blank">Laravel.io</a>
          <a class="dropdown-item" href="https://laracasts.com" target="_blank">Laracasts</a>
          <a class="dropdown-item" href="https://larajobs.com" target="_blank">Larajobs</a>
          <a class="dropdown-item" href="https://laravel-news.com" target="_blank">Laravel News</a>
          <a class="dropdown-item" href="https://larachat.co" target="_blank">Larachat</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact_path') }}">Contact</a>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
    </ul>
 
  </div>
  </div>
</nav>