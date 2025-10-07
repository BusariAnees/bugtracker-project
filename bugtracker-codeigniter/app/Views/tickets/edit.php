<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h3>Edit Ticket</h3>
<form method="post" action="/tickets/<?= esc($ticket['id']) ?>/update">
  <?php include __DIR__.'/_form.php'; ?>
</form>
<?= $this->endSection() ?>
