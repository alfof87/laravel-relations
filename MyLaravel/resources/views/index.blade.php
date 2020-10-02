@extends('layouts.main-layout');

@section('section')
  <div class="">
    <h1>Employees:</h1>
    <ul>
    @foreach ($emps as $emp)
      <li>
        <a href="{{ route('emp.show', $emp -> id) }}"><h3>{{ $emp -> firstname }} {{ $emp -> lastname }}</h3></a>
      </li>
    @endforeach
    </ul>
  </div>
@endsection
