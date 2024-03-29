<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rahmat Jeans') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      .space {
        margin: 0 5px;
        text-align: center;
        vertical-align: middle;
      }
    </style>
</head>
<body class="hold-transition layout-top-nav layout-footer-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand-md navbar-dark navbar-rahmat">
        <div class="container">
          <a href="/" class="navbar-brand">
            <img src="/images/logo.jpeg" alt="Rahmat Jeans" class="brand-image" style="height: 55px !important; border-radius: 50%;">
            <span class="text-white text-xl font-weight-bold">RAHMAT JEANS</span>
          </a>
          <!-- Right navbar links -->
          <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto" style="font-size: larger;font-weight: bold;">
            <li class="nav-item">
              @auth
                <a href="/home" class="nav-link">Home</a>
              @endauth
              @guest
                <a href="/" class="nav-link">Home</a>
              @endguest
            </li>
            <li class="nav-item">
              @guest
                <a href="/kontak" class="nav-link">Kontak</a>
              @endguest
            </li>
            @guest
              @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
              @endif
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            @endguest
          </ul>
        </div>
      </nav>
      <!-- /.navbar -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
          <div class="container">
            <div class="row mb-3"></div>
            <div class="row justify-content-center">
              @yield('content')
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- Default to the left -->
        <strong>Copyright &copy; 2021 <a href="https://noteseko.blogspot.com" target="_blank">noteseko.blogspot.com</a></strong>
      </footer>
    </div>
    <!-- ./wrapper -->
    </body>
    @yield('script')
</html>
