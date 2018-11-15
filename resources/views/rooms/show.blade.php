@extends('layouts.app')

@section('contents')

<div class="modal fade" id="modalFurnitureForm" tabindex="-1" role="dialog" aria-labelledby="modalFurnitureForm"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="gridModalLabel">お部屋の家具について</h4>
            </div>
            <form id="estimate_form" action="{{ url('furniture_sets/') }}" method="GET" class="container-fluid">
                <input type="hidden" name="room_id" value="{{ $room->id }}">
                <div class="modal-body">
                    <p>お部屋の家具も一緒にチョイスすることで、引っ越し時にお部屋に設置いたします。</p>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="radio" id="require" name="furniture_request" value="true" class="radio-image" />
                            <label for="require">家具をレンタルする</label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" id="norequire" name="furniture_request" value="false" class="radio-image" />
                            <label for="norequire">家具をレンタルしない</label>
                        </div>
                    </div>

                    <div id="furniture_set_select" class="row form-group" style="display:none;">
                        <div class="col-md-6">
                            <input type="radio" id="fs_chic" value="1" name="furniture_set" class="radio-image" />
                            <label for="fs_chic">シック</label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" id="fs_mono" value="2" name="furniture_set" class="radio-image" />
                            <label for="fs_mono">モノクロ</label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" id="fs_wood" value="3" name="furniture_set" class="radio-image" />
                            <label for="fs_wood">ウッディ</label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" id="fs_pretty" value="4" name="furniture_set" class="radio-image" />
                            <label for="fs_pretty">可愛い系</label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-white waves-effect waves-light">キャンセル</button>
                    <button type="submit" id="furniture_set_submit" class="btn btn-primary waves-effect waves-light"
                        disabled>見積もりを出す</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="gtco-section gtco-testimonial gtco-gray" style="padding:2em 0;">
    <div class="gtco-container container">

        <div class="row row-pb-slim">
            <div class="col-md-10 gtco-heading text-left">
                <h2>{{ $room->name }}</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="slider-pro" class="slider-pro">
                    <div class="sp-slides">
                        @foreach($room->images as $image)
                        <div class="sp-slide">
                            <img class="sp-image" src="{{ url($image->image_path) }}" />

                            <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="50"
                                data-show-transition="left" data-show-delay="400">
                                タグを
                            </p>

                            <p class="sp-layer sp-black sp-padding" data-horizontal="180" data-vertical="50"
                                data-show-transition="left" data-show-delay="600">
                                ここら辺に
                            </p>

                            <p class="sp-layer sp-white sp-padding" data-horizontal="315" data-vertical="50"
                                data-show-transition="left" data-show-delay="800">
                                表示させるのはいかがでしょう
                            </p>
                        </div>
                        @endforeach

                    </div>

                    @if (count($room->images) > 1)
                    <div class="sp-thumbnails">
                        @foreach($room->images as $image)
                        <img class="sp-thumbnail" src="{{ ur($image) }}" />
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1" style="margin-top:30px;">
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <td>建物名</td>
                            <th>{{ $room->name }}</th>
                        </tr>
                        <tr>
                            <td>住所</td>
                            <th>{{ $room->address }}</th>
                        </tr>
                        <tr>
                            <td>その他</td>
                            <td>駅近</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-center">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalFurnitureForm">ここにする</button>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(function() {
        $('#slider-pro').sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: <?= count($room->images) > 1 ? 'true' : 'false' ?> ,
            buttons: false,
            fullScreen: true,
            shuffle: true,
            smallSize: 500,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: true,
            touchSwipe: <?= count($room->images) > 1 ? 'true' : 'false' ?>
        });

        const form_action_url = $('#estimate_form').attr('action');

        function isSubmit(that){
            if ($(that).val() == "false" || $('input[name="furniture_set"]:checked').val()) $('#furniture_set_submit').removeAttr('disabled');
            else $('#furniture_set_submit').attr('disabled', 'disabled');
        };

        $('input[name="furniture_request"]').change(function(){
            if ($(this).val() == "true") $("#furniture_set_select").fadeIn(1000);
            else {
                $("#furniture_set_select").hide();
            }
            
            isSubmit(this);
        });
        $('input[name="furniture_set"]').change(function(){
            let id = $('input[name="furniture_set"]:checked').val();
            if (id) $('#estimate_form').attr('action', form_action_url + "/" + id );
            isSubmit(this);
        })
    });
</script>
@endsection

@section('style')
<style type="text/css">
    input[type="radio"].radio-image {
        display: none;
    }

    input[type="radio"].radio-image+label {
        margin: 10px;
        display: inline-block;
        background-image: url("../img/present.png");
        background-repeat: no-repeat;
        background-size: contain;
        width: 100%;
        height: 100px;
    }

    input[type="radio"].radio-image:checked+label {
        background-repeat: no-repeat;
        background-size: contain;
        width: 100%;
        height: 100px;
        -webkit-filter: opacity(0.6);
        filter: opacity(0.6);
    }

    input[type="radio"].radio-image:checked+label::before {
        background-color: rgba(0, 0, 0, 0.3);
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        content: ' ';
    }
</style>
@endsection