<html>
<head>
    <title>@yield('title')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
           
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>