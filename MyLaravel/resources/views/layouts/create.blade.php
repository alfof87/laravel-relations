@extends('layouts.main-layout');
@section('section')
  <div class="flex">
    <form>
      @csrf
      @method('POST')
      <div class="">
        <label for="firstname">Firstname:</label>
        <br>
        <input type="text" name="firstname" value="">
      </div>
      <div class="">
        <label for="lastname">Lastname:</label>
        <br>
        <input type="text" name="lastname" value="">
      </div>
      <div class="">
        <label for="date_of_birth">Date of Birth:</label>
        <br>
        <input type="date" name="date_of_birth" value="">
      </div>
      <div class="">
        <label for="private_code">Private Code:</label>
        <br>
        <input type="text" name="private_code" value="">
      </div>
      <div class="">
        <label for="location">Location:</label>
        <br>
        <select class="" name="">
          @foreach ($locs as $loc)
            <option value="">{{ $loc -> name }}</option>
          @endforeach
        </select>
      </div>
      <br>
      <button type="submit" name="button">SALVA</button>
    </form>
  </div>
@endsection
