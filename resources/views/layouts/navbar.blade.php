<nav class="navbar navbar-expand-lg">
  @auth
    <div class="container-fluid">
      <img class="laravel" src="{{asset("my_imgs/laravel-renkli.svg")}}" alt="apple">
      <a class="navbar-brand" href="{{route("home")}}">Blog-App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{Route::is("home") ? "active" : ""}}" aria-current="page" href="{{route("home")}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is("categories") ? "active" : ""}}" href="{{route("categories")}}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is("blogs.index") ? "active" : ""}}" href="{{route("blogs.index")}}">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is("blogs.create") ? "active" : ""}}" href="{{route("blogs.create")}}">Create a Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is("author") ? "active" : ""}}" href="{{route("author")}}">Author</a>
          </li>
        </ul>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
          @csrf
          <button type="submit" class="auth-button">Çıkış Yap</button>
        </form>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div> 
  @endauth

  @guest
    <div class="container-fluid">
      <img class="laravel" src="{{asset('my_imgs/laravel-renkli.svg')}}" alt="apple">
      <a class="navbar-brand" href="{{route("welcome")}}">Blog-App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{Route::is("welcome") ? "active" : ""}}" aria-current="page" href="{{route("welcome")}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is("categories") ? "active" : ""}}" href="{{route("categories")}}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is("blogs.index") ? "active" : ""}}" href="{{route("blogs.index")}}">Blogs</a>
          </li>
        </ul>
        <div>
            <form action="{{ route('register') }}" method="GET" style="display: inline;">
            @csrf
            <button class="auth-button" type="submit">Kayıt Ol</button>
          </form>
          <form action="{{ route('login') }}" method="GET" style="display: inline;">
            @csrf
            <button  class="auth-button" type="submit">Giriş Yap</button>
          </form>
        </div>
      </div>
    </div> 
  @endguest
</nav>

 
