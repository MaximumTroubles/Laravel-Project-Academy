<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- bootstrap --}}
    
    {{-- bootstrap --}}

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    @yield('css')
</head>
<body>

    {{-- header --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fffc44;">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">
                <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top"> Bootstrap
              </a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contacts">Contacts</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="/sale">Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/reviews ">Reviews</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/news ">News</a>
                  </li>


                  
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>

    {{-- Content --}}
    <div class="container">
        <div class="row">
          <div class="col-md-3">
              @section('sidebar')
                @include('store.parts._list-categories')
              @show
          </div>
          <div class="col-md-9">
              @yield('content')
          </div>
        </div>
        
    </div>

    {{-- footer --}}
    <footer>
        <nav class="navbar  navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Footer</a>
            </div>
          </nav>
    </footer>

    {{-- scripts --}}
    {{-- bootstrap --}}
    
    {{-- bootstrap --}}

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>
</html>

    

