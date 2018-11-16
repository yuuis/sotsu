@extends('layouts.app')

@section('contents')
<div class="gtco-section gtco-testimonial gtco-gray" style="padding:2em 0;">
    <div class="gtco-container container">

        <div class="row row-pb-slim">
            <div class="col-md-10 gtco-heading text-left">
                <h2>〜の部屋</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                3D表示
            </div>
            <div class="col-md-12" style="margin-top:30px;">
                <table class="table">
                    <tbody>
                        <tr>
                            <th width="20%">イメージ</th>
                            <th colspan="2">概要</th>
                        </tr>
                        @foreach ($set->furnitures as $furniture)
                        <tr>
                            <td rowspan="3"><img src="{{ url($furniture->images[0]->image_path) }}" alt=""></td>
                            <td colspan="2">{{ $furniture->name }}</td>
                        </tr>
                        <tr>
                            <td>値段</td>
                            <td>{{ $furniture->price }}円</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{ url('users/create') }}" method="GET">
                    <input type="hidden" name="room_id" value="{{ $room_id }}">
                    <input type="hidden" name="furniture_set_id" value="{{ $set->id }}">
                    <p class="text-center">
                        <button type="submit" class="btn btn-primary">家具をレンタルする</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(function() {

    });
</script>
@endsection