<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link the css file --}}
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    <title>India Mall</title>
</head>
<body>

    <div class="page">

        <header tabindex="0">

            {{-- <img class="logo" src="images/logo.JPG" alt=""> --}}
            <form>
                <label for="search">Search</label>
                <input id="search" type="search" pattern=".*\S.*" required>
                <span class="caret"></span>
            </form>
        </header>

        <div id="nav-container">
          <div class="bg"></div>
          <div class="button" tabindex="0">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </div>



          <div id="nav-content" tabindex="0">
            <ul>
              <li><a href="#0">Home</a></li>
              <li><a href="#0">Services</a></li>
              <li><a href="#0">Blog</a></li>
              <li><a href="#0">About</a></li>
              <li><a href="#0">Contact</a></li>
              <li class="small"><a href="#0">Facebook</a><a href="#0">Instagram</a></li>
            </ul>
          </div>
          @yield('content')
          @include('partials.footer')
        </div>
      </div>






    <script src="{{ asset('assets/app.js') }}"></script>
    {{-- @yield('scripts') --}}
</body>
</html>
