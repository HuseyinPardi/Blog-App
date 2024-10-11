<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img class="laravel" src="{{asset("my_imgs/admin.svg")}}" alt="apple">
      <a class="navbar-brand" href="{{route("admin.dashboard")}}">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{Route::is("admin.dashboard") ? "active" : ""}}" aria-current="page" href="{{route("admin.dashboard")}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is("admin.users.index") ? "active" : ""}}" href="{{route("admin.users.index")}}">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is("admin.categories.index") ? "active" : ""}}" href="{{route("admin.categories.index")}}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is("admin.blogs.index") ? "active" : ""}}" href="{{route("admin.blogs.index")}}">Blogs</a>
          </li>
        </ul>
        <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
          @csrf
          <button type="submit" class="auth-button">Çıkış Yap</button>
        </form>
      </div>
    </div> 
</nav>