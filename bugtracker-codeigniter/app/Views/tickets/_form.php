<div class="mb-3">
  <label class="form-label">Title</label>
  <input class="form-control" type="text" name="title" value="<?= esc($ticket['title'] ?? '') ?>">
</div>
<div class="mb-3">
  <label class="form-label">Description</label>
  <textarea class="form-control" name="description" rows="5"><?= esc($ticket['description'] ?? '') ?></textarea>
</div>
<div class="mb-3">
  <label class="form-label">Status</label>
  <select class="form-select" name="status">
    <?php foreach(['open','in_progress','resolved','closed'] as $s): ?>
      <option value="<?= $s ?>" <?= (($ticket['status'] ?? 'open')===$s)?'selected':'' ?>><?= ucfirst(str_replace('_',' ', $s)) ?></option>
    <?php endforeach; ?>
  </select>
</div>
<div class="mb-3">
  <label class="form-label">Severity</label>
  <select class="form-select" name="severity">
    <?php foreach(['low','medium','high','critical'] as $s): ?>
      <option value="<?= $s ?>" <?= (($ticket['severity'] ?? 'medium')===$s)?'selected':'' ?>><?= ucfirst($s) ?></option>
    <?php endforeach; ?>
  </select>
</div>
<div class="mb-3">
  <label class="form-label">Assigned To (user id)</label>
  <input class="form-control" type="number" name="assigned_to" value="<?= esc($ticket['assigned_to'] ?? '') ?>">
</div>
<button class="btn btn-primary">Save</button>
