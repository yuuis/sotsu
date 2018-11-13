@extends('layouts.app')

@section('contents')
{{ var_dump($room) }}
家具はレンタルする？ -> する/<a href="#">しない</a>
家具のテイストは？ -> シック/<a href="{{ url('furniture_sets/1') }}">モノクロ</a>/ウッディ
@endsection