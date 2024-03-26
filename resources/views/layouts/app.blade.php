<html>
<head>
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/1fe41ac4e1.js" crossorigin="anonymous"></script>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Bootstrap
          </a>
        </div>
      </nav>


    <div class="container">
        @yield('content')
    </div>

</body>
</html>