@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>#{{ $ticket->id }} — {{ $ticket->title }}</h3>
  <a href="{{ route('tickets.edit', $ticket) }}" class="btn btn-outline-primary">Edit</a>
</div>
<p><strong>Status:</strong> {{ $ticket->status }} | <strong>Severity:</strong> {{ $ticket->severity }}</p>
<p><strong>Assignee:</strong> {{ optional($ticket->assignee)->name ?? '—' }}</p>
<hr>
<p style="white-space:pre-wrap">{{ $ticket->description }}</p>
@endsection
