@extends('layouts.app')
@section('content')
<h3>Create Ticket</h3>
<form method="POST" action="{{ route('tickets.store') }}">
  @include('tickets._form')
</form>
@endsection
