<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'BugTracker') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ route('tickets.index') }}">BugTracker</a>
    <div class="d-flex">
      @auth
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="btn btn-outline-danger btn-sm">Logout</button>
        </form>
      @endauth
      @guest
        <a class="btn btn-outline-primary btn-sm me-2" href="{{ route('login') }}">Login</a>
        <a class="btn btn-primary btn-sm" href="{{ route('register') }}">Register</a>
      @endguest
    </div>
  </div>
</nav>
<main class="container">
  @if(session('ok'))
    <div class="alert alert-success">{{ session('ok') }}</div>
  @endif
  @yield('content')
</main>
</body>
</html>
