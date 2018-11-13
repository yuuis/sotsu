@extends('layouts.app')

@section('contents')
<form action="{{ url('users ') }}" method="post">
{{ csrf_field() }}
  お名前: <input type="text" name="name">
  Email: <input type="email" name="email">
  phone: <input type="text" name="phone">
  性別: <input type="text", name="gender">
  <input type="submit" value="会員登録して部屋を借りる">
  <a href="#">登録済みの方はこちら</a>
</form>
@endsection