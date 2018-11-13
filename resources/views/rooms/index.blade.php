@extends('layouts.app')

@section('contents')
<form action="{{ url('rooms/search') }}" method="get">
    都道府県: <input type="text" name="prefecture">
    地域: <input type="text" name="rejon">
    交通機関: <input type="text" name="transportation">
    <input type="submit" value="検索する">
</form>
{{ var_dump($rooms) }}
@endsection






































