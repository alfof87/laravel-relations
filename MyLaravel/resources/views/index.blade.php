@extends('layouts.main-layout');

@section('section')
  <div class="flex">
    <ul>
      <h1>Employees:</h1>
      <br>
      <h3><a href="{{ route('emp.create') }}">CREA NUOVO</a></h3>
      <br>
    @foreach ($emps as $emp)
      <li class="flex">
        <a href="{{ route('emp.show', $emp -> id) }}"><h3>{{ $emp -> firstname }} {{ $emp -> lastname }}</h3></a>
        <a href="{{ route('emp.destroy', $emp -> id) }}"><strong><span id="x">&otimes;</span></strong></a>
      </li>
    @endforeach
    </ul>
  </div>
@endsection
