@extends('layouts.app')

@section('contents')

<div class="gtco-section gtco-testimonial gtco-gray" style="padding:2em 0;">
    <div class="gtco-container container">

        <div class="row row-pb-tin">
            <div class="col-md-10 gtco-heading text-left">
                <h2>〜の部屋</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                3D表示
            </div>
            <div class="col-md-10 col-md-offset-1" style="margin-top:30px;">
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <th>イメージ</th>
                            <th colspan="2">概要</th>
                        </tr>
                        @foreach ($set->furnitures as $furniture)
                        <tr>
                            <td rowspan="3">画像</td>
                            <td colspan="2">商品の名前</td>
                        </tr>
                        <tr>
                            <td>値段</td>
                            <td>100円</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <p class="text-center">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalFurnitureForm">家具をレンタルする</button>
                </p>
            </div>
        </div>
    </div>
</div>
{{ var_dump($set) }}
@endsection

@section('script')
<script>
    $(function() {

    });
</script>
@endsection