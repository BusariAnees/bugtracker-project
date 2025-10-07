<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h3>Create Ticket</h3>
<form method="post" action="/tickets">
  <?php $ticket = []; include __DIR__.'/_form.php'; ?>
</form>
<?= $this->endSection() ?>
