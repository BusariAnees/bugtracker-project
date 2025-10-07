<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>Tickets</h3>
  <a href="/tickets/create" class="btn btn-primary">New Ticket</a>
</div>

<form class="row g-2 mb-3" method="get">
  <div class="col-md-3">
    <select name="status" class="form-select">
      <option value="">Status...</option>
      <?php foreach(['open','in_progress','resolved','closed'] as $s): ?>
        <option value="<?= $s ?>" <?= (($_GET['status'] ?? '')===$s)?'selected':'' ?>><?= ucfirst(str_replace('_',' ', $s)) ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-3">
    <select name="severity" class="form-select">
      <option value="">Severity...</option>
      <?php foreach(['low','medium','high','critical'] as $s): ?>
        <option value="<?= $s ?>" <?= (($_GET['severity'] ?? '')===$s)?'selected':'' ?>><?= ucfirst($s) ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-2">
    <button class="btn btn-outline-secondary w-100">Filter</button>
  </div>
</form>

<table class="table table-striped">
  <thead><tr><th>#</th><th>Title</th><th>Status</th><th>Severity</th><th>Assignee</th><th></th></tr></thead>
  <tbody>
    <?php foreach($tickets as $t): ?>
      <tr>
        <td><?= esc($t['id']) ?></td>
        <td><a href="/tickets/<?= esc($t['id']) ?>"><?= esc($t['title']) ?></a></td>
        <td><span class="badge text-bg-secondary"><?= esc($t['status']) ?></span></td>
        <td><span class="badge text-bg-dark"><?= esc($t['severity']) ?></span></td>
        <td><?= esc($t['assigned_to'] ?? '—') ?></td>
        <td>
          <a class="btn btn-sm btn-outline-primary" href="/tickets/<?= esc($t['id']) ?>/edit">Edit</a>
          <form method="post" action="/tickets/<?= esc($t['id']) ?>/delete" style="display:inline">
            <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete?')">Delete</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?= $this->endSection() ?>
