
{{-- <nav class="navbar navbar-light" > --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a id="admin-view" class="nav-link" href="#">Admin view
                    {{-- <h1 id="admin-tab">test</h1> --}}
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('books.create')}}">Create new post</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  {{-- </nav> --}}
