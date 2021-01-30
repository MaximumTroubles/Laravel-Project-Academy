<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- CSS --}}
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

                <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif
                      
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
                </ul>
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

    

