<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BugTracker CI4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar bg-light mb-4">
      <div class="container">
        <a class="navbar-brand" href="/tickets">BugTracker CI4</a>
        <div class="d-flex">
          <?php if(session()->get('user_id')): ?>
          <form method="post" action="/logout">
            <button class="btn btn-outline-danger btn-sm">Logout</button>
          </form>
          <?php else: ?>
          <a class="btn btn-outline-primary btn-sm me-2" href="/login">Login</a>
          <a class="btn btn-primary btn-sm" href="/register">Register</a>
          <?php endif; ?>
        </div>
      </div>
    </nav>
    <main class="container">
      <?php if(session('error')): ?>
        <div class="alert alert-danger"><?= esc(session('error')) ?></div>
      <?php endif; ?>
      <?= $this->renderSection('content') ?>
    </main>
  </body>
</html>
