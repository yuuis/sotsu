@extends('layouts.app')

@section('contents')
{{ var_dump($user) }}
<form action="{{ url('reserves') }}" method="post">
  {{ csrf_field() }}
  <!-- hiddenでuser_id, furniture_id, user_id送ってほしいです -->
  入居はいつ？: <input type="date" name="enter_date">
  近くの不動産: 適当に地図
  同意してね <input type="checkbox" name="agree">
  <input type="submit" value="予約する">
</form>
@endsection