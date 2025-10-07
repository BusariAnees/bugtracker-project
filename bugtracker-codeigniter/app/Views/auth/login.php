<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="/login">
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control" type="email" name="email">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control" type="password" name="password">
          </div>
          <button class="btn btn-primary w-100">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
