@extends('layouts.main-layout')
@section('content')

  <h2>
    <a href="{{ route('home') }}">
      HOME
    </a>
  </h2>

  <h1>STANZE</h1>

  <h3>
    <a href="{{ route('stanza-create') }}">
      NEW STANZA
    </a>
  </h3>

  <ul>
    @foreach ($stanze as $stanza)
      <li>
          <a href="{{ route('stanza-show', $stanza -> id) }}">
            ROOM NUMBER: {{ $stanza -> room_number }}
          </a>
      </li>
    @endforeach
  </ul>

@endsection
