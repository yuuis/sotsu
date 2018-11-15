@extends('layouts.app')

@section('contents')

<div class="modal fade" id="modalSearchForm" tabindex="-1" role="dialog" aria-labelledby="modalSearchForm" aria-hidden="true"
    data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="gridModalLabel">部屋を探そう</h4>
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

<header id="gtco-header" class="gtco-cover gtco-cover-xs gtco-inner" role="banner">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="row">
                            <div class="col-md-8 animate-box">
                                <h1 class="no-margin">お部屋を探します。</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia facilis, accusamus
                                    iusto animi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
                    Modal Login Form</a>
            </div>
        </div>
    </div>
</header>

{{ var_dump($rooms) }}
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
        $('#modalSearchForm').modal('show');

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