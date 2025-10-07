@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>Tickets</h3>
  <a href="{{ route('tickets.create') }}" class="btn btn-primary">New Ticket</a>
</div>

<form class="row g-2 mb-3" method="GET">
  <div class="col-md-3">
    <select name="status" class="form-select">
      <option value="">Status...</option>
      @foreach(['open','in_progress','resolved','closed'] as $s)
        <option value="{{ $s }}" @selected(request('status')===$s)>{{ ucfirst(str_replace('_',' ', $s)) }}</option>
      @endforeach
    </select>
  </div>
  <div class="col-md-3">
    <select name="severity" class="form-select">
      <option value="">Severity...</option>
      @foreach(['low','medium','high','critical'] as $s)
        <option value="{{ $s }}" @selected(request('severity')===$s)>{{ ucfirst($s) }}</option>
      @endforeach
    </select>
  </div>
  <div class="col-md-2">
    <button class="btn btn-outline-secondary w-100">Filter</button>
  </div>
</form>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th><th>Title</th><th>Status</th><th>Severity</th><th>Assignee</th><th>Created</th><th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($tickets as $t)
    <tr>
      <td>{{ $t->id }}</td>
      <td><a href="{{ route('tickets.show', $t) }}">{{ $t->title }}</a></td>
      <td><span class="badge text-bg-secondary">{{ $t->status }}</span></td>
      <td><span class="badge text-bg-dark">{{ $t->severity }}</span></td>
      <td>{{ optional($t->assignee)->name ?? '—' }}</td>
      <td>{{ $t->created_at->diffForHumans() }}</td>
      <td>
        <a class="btn btn-sm btn-outline-primary" href="{{ route('tickets.edit', $t) }}">Edit</a>
        <form method="POST" action="{{ route('tickets.destroy', $t) }}" style="display:inline">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $tickets->withQueryString()->links() }}
@endsection
