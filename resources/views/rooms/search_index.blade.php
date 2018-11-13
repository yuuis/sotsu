@extends('layouts.app')

@section('contents')
{{ var_dump($rooms) }}
@foreach($rooms as $room)
<li><a href="{{ url('rooms/' . $room->id) }}">{{ $room->name }}</a></li>
@endforeach
@endsection