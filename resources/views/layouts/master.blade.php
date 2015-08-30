<!DOCTYPE html>
<html>
<head>
  <title>@yield('title') - Laravel Test</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet">
  @yield('stylesheets')
</head>
<body>

  @include('partials.navbar')
  
  <div class="container">

    <div class="content">
      @yield('content')
    </div>

    @include('partials.footer')

  </div>

<!-- Scripts -->
@yield('scripts')
</body>
</html>