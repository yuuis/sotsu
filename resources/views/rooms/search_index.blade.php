@extends('layouts.app')

@section('contents')

<div class="modal fade" id="modalSearchForm" tabindex="-1" role="dialog" aria-labelledby="modalSearchForm" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="gridModalLabel">部屋を探す</h4>
            </div>
            <form action="{{ url('rooms/search') }}" method="GET" class="container-fluid">

                <div class="modal-body">
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label for="select_area">地域</label>
                        </div>
                        <div class="col-md-8 ml-auto">
                            <select name="area" class="form-control" id="select_area">
                                <option value="">地域を選択</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label for="select_prefecture">都道府県</label>
                        </div>
                        <div class="col-md-8 ml-auto">
                            <select name="prefecture" class="form-control" id="select_prefecture" disabled>
                                <option value="">都道府県を選択</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label for="select_municipality">市区町村</label>
                        </div>
                        <div class="col-md-8 ml-auto">
                            <select name="municipality" class="form-control" id="select_municipality" disabled>
                                <option value="">市区町村を選択</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row form-group form-check">
                        <div class="col-md-4">
                            <label>その他</label>
                        </div>
                        <div class="col-md-8 ml-auto">
                            <input type="checkbox" name="search_options" id="search_opt_nearstation" value="nearstation"
                                class="form-check-input">
                            <label class="form-check-label" for="search_opt_nearstation">駅近く</label>
                            &emsp;
                            <input type="checkbox" name="search_options" id="search_opt_mansion" value="mantion" class="form-check-input">
                            <label class="form-check-label" for="search_opt_mansion">マンションタイプ</label>
                            &emsp;
                            <input type="checkbox" name="search_options" id="search_opt_cheap" value="cheap" class="form-check-input">
                            <label class="form-check-label" for="search_opt_mansion">安い</label>
                            &emsp;
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">この条件で探す</button>
                </div>
            </form>
        </div>
    </div>
</div>

<header id="gtco-header" class="gtco-cover gtco-cover-slim gtco-inner" role="banner">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <h1 class="no-margin">お部屋を探しましょう</h1>
                                <p class="text-right"><button data-toggle="modal" data-target="#modalSearchForm" class="btn btn-white">別の条件で探す</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="gtco-section gtco-testimonial gtco-gray">
    <div class="gtco-container container">

        <div class="row row-pb-slim">
            <div class="col-md-8 col-md-offset-2 gtco-heading text-center">
                <h2>[検索条件]のお部屋一覧</h2>
                <p>xxx件のお部屋が見つかりました</p>
            </div>
        </div>

        <div class="row">
            @foreach($rooms as $room)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="{{ url('rooms/' . $room->id) }}">{{ $room->name }}</a></h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <img width="100%" src="{{ $room->images[0]->image_path }}" alt="{{ $room->name }}の画像">
                    </div>
                    <div class="col-md-8">
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
                        <p class="text-right">
                            <a href="{{ url('rooms/'.$room->id ) }}" class="btn btn-white">詳細</a>
                        </p>
                    </div>
                </div>
                <div class="panel-footer">

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/japan_map_data.js') }}"></script>
<script type="text/javascript">
    const maps = new JapanMapData();

    const areas = maps.getArea();
    const prefectures = maps.getPrefectures();

    areas.forEach(function(area) {
        $('#select_area').append($("<option value='" + area + "'>" + area + "</option>"));
    });

    Object.keys(prefectures).forEach(function(key) {
        $('#select_prefecture').append($("<option value='" + key + "' data-val='" + prefectures[key] + "'>" +
            key + "</option>"));
    });

    $(function() {
        var $prefectures_html = $('#select_prefecture');
        var $municipality_html = $('#select_municipality');
        var original = $prefectures_html.html();

        $('#select_area').change(function() {
            const val1 = $(this).val();
            $prefectures_html.html(original).find('option').each(function() {
                const val2 = $(this).data('val');
                if (val1 != val2) {
                    $(this).not(':first-child').remove();
                }
            });
            if ($(this).val() == "") {
                $prefectures_html.attr('disabled', 'disabled');
            } else {
                $prefectures_html.removeAttr('disabled');
            }
        });

        $('#select_prefecture').change(function() {
            const val1 = $(this).val();
            const municipality = maps.getMunicipality(val1);
            $municipality_html.empty();
            $municipality_html.append($('<option value="">市区町村を選択</option>'));
            Object.keys(municipality).forEach(function(key) {
                $municipality_html.append($("<option value='" + key + "' data-val='" +
                    municipality[key] + "'>" +
                    key + "</option>"));
            });
            if ($(this).val() == "") {
                $municipality_html.attr('disabled', 'disabled');
            } else {
                $municipality_html.removeAttr('disabled');
            }
        });
    });
</script>
@endsection