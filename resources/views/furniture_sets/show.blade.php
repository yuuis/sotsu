@extends('layouts.app')

@section('contents')
{{ var_dump($set) }}
<a href="{{ url('users/create') }}">家具をレンタルする</a>
@endsection