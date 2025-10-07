@extends('layouts.app')
@section('content')
<h3>Edit Ticket</h3>
<form method="POST" action="{{ route('tickets.update', $ticket) }}">
  @method('PUT')
  @include('tickets._form')
</form>
@endsection
