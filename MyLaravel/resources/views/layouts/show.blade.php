@section('section')
  <div class="">
    <ul>
      @foreach ($emps as $emp)
        <li>
          {{ $emp -> date_of_birth }}
          {{ $emp -> private_code }}
        </li>
      @endforeach
    </ul>
  </div>
@endsection
