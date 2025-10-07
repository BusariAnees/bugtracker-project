@csrf
<div class="mb-3">
  <label class="form-label">Title</label>
  <input type="text" name="title" class="form-control" value="{{ old('title', $ticket->title ?? '') }}" required>
</div>
<div class="mb-3">
  <label class="form-label">Description</label>
  <textarea name="description" class="form-control" rows="5" required>{{ old('description', $ticket->description ?? '') }}</textarea>
</div>
<div class="mb-3">
  <label class="form-label">Status</label>
  <select name="status" class="form-select">
    @foreach(['open','in_progress','resolved','closed'] as $s)
      <option value="{{ $s }}" @selected(old('status', $ticket->status ?? 'open') === $s)>{{ ucfirst(str_replace('_',' ', $s)) }}</option>
    @endforeach
  </select>
</div>
<div class="mb-3">
  <label class="form-label">Severity</label>
  <select name="severity" class="form-select">
    @foreach(['low','medium','high','critical'] as $s)
      <option value="{{ $s }}" @selected(old('severity', $ticket->severity ?? 'medium') === $s)>{{ ucfirst($s) }}</option>
    @endforeach
  </select>
</div>
<div class="mb-3">
  <label class="form-label">Assigned To</label>
  <select name="assigned_to" class="form-select">
    <option value="">—</option>
    @foreach($users as $u)
      <option value="{{ $u->id }}" @selected(old('assigned_to', $ticket->assigned_to ?? '') == $u->id)>{{ $u->name }}</option>
    @endforeach
  </select>
</div>
<button class="btn btn-primary">Save</button>
