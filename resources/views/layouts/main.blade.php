<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    {{-- bootstrap --}}
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
                    <a class="nav-link" href="/">Что то будет</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/">Что то будет 2</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
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
        @yield('content')
    </div>

    {{-- footer --}}
    <footer>
        <nav class="navbar fixed-bottom navbar-light" style="background-color: #fffc44; ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Footer</a>
            </div>
          </nav>
    </footer>

    {{-- scripts --}}
    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    {{-- bootstrap --}}
    @yield('js')
</body>
</html>

    

