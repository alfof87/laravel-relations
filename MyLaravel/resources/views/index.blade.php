@extends('layouts.main-layout');

@section('section')
  <div class="flex">
    <ul>
      <h1>Employees:</h1>
      <br>
      <h3><a href="{{ route('emp.create') }}">CREA NUOVO</a></h3>
      <br>
    @foreach ($emps as $emp)
      <li>
        <a href="{{ route('emp.show', $emp -> id) }}"><h3>{{ $emp -> firstname }} {{ $emp -> lastname }}</h3></a>
      </li>
    @endforeach
    </ul>
  </div>
@endsection
