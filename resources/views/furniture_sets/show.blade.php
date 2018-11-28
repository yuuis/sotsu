@extends('layouts.app')

@section('contents')
<div class="gtco-section gtco-testimonial gtco-gray" style="padding:2em 0;">
    <div class="gtco-container container">

        <div class="row row-pb-slim">
            <div class="col-md-10 gtco-heading text-left">
                <h2>お部屋イメージ</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <iframe id="inlineFrameExample" title="Inline Frame Example" width="100%" height="640px" src="{{ url('simulator/dist/index.html') }}">
                </iframe>
            </div>
            <div class="col-md-12" style="margin-top:30px;">
                <table class="table">
                    <tbody>
                        <tr>
                            <th width="20%">画像</th>
                            <th colspan="2">概要</th>
                        </tr>
                        @foreach ($set->furnitures as $furniture)
                        <tr>
                            <td rowspan="3"><img src="{{ url($furniture->images[0]->image_path) }}" alt="" width="100%"></td>
                            <td colspan="2">{{ $furniture->name }}</td>
                        </tr>
                        <tr>
                            <td>レンタル価格</td>
                            <td>{{ $furniture->rental_price }}円/月</td>
                        </tr>
                        <tr>
                            <td>購入価格</td>
                            <td>{{ $furniture->purchase_price }}円</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{ url('users/create') }}" method="GET">
                    <input type="hidden" name="room_id" value="{{ $room_id }}">
                    <input type="hidden" name="furniture_set_id" value="{{ $set->id }}">
                    <p class="text-center">
                        <button type="submit" class="btn btn-primary">この家具をレンタルする</button>
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