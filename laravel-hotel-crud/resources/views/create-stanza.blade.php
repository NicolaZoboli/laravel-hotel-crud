@extends('layouts.main-layout')
@section('content')

  <h1>NEW STANZA</h1>

  <form action="{{ route('stanza-store') }}" method="post" id="new_stanza">

    @csrf
    @method('POST')

    <div class="form-group">
      <label for="room_number">ROOM NUMBER</label>
      <br>
      <input type="text" name="room_number" value="">
    </div>

    <div class="form-group">
      <label for="floor">FLOOR</label>
      <br>
      <input type="text" name="floor" value="">
    </div>

    <div class="form-group">
      <label for="beds">BEDS</label>
      <br>
      <input type="text" name="beds" value="">
    </div>

    <br>

    <button type="submit" form="new_stanza" value="Submit">Submit</button>

  </form>


@endsection
