@extends('layouts.main-layout')
@section('content')

  <h1>
    ID STANZA: {{ $stanza -> id }} <br>
    ROOM NUMBER: {{ $stanza -> room_number }} <br>
    FLOOR: {{ $stanza -> floor }} <br>
    BEDS: {{ $stanza -> beds }} <br>
  </h1>

  <h3>
    <a href="{{ route('stanze-index') }}">
      INDEX STANZE
    </a>
  </h3>

@endsection
