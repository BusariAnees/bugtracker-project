<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card">
      <div class="card-header">Create account</div>
      <div class="card-body">
        <form method="post" action="/register">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="form-control" type="text" name="name">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control" type="email" name="email">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control" type="password" name="password">
          </div>
          <button class="btn btn-primary w-100">Sign up</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
