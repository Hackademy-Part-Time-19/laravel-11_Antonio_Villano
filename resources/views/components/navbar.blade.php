  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Homepage</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('books.index')}}"> Books</a>
          </li>


          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('books.create')}}">Create Books</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
          </form>

          </li>

          @endauth

        </ul>
      </div>
    </div>
  </nav>