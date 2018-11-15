@extends('layouts.app')

@section('contents2')
<form action="{{ url('users') }}" method="post">
	{{ csrf_field() }}
	お名前: <input type="text" name="name">
	Email: <input type="email" name="email">
	phone: <input type="text" name="phone">
	性別: <input type="text" , name="gender">
	<input type="submit" value="会員登録して部屋を借りる">
	<a href="#">登録済みの方はこちら</a>
</form>
@endsection

@section('contents')

<header id="gtco-header" class="gtco-cover gtco-cover-thin gtco-inner" role="banner">
	<div class="gtco-container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0 text-left">
				<div class="display-t">
					<div class="display-tin">
						<div class="row">
							<div class="col-md-12 animate-box">
								<h1 class="no-margin">お客様の情報</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia facilis, accusamus
									iusto animi.</p>
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
		<div class="row">
			<form action="{{ url('users') }}" method="POST">
				{{ csrf_field() }}
				<div class="modal-body">
					<div class="row form-group">
						<div class="col-md-4">
							<label for="user_name">お名前</label>
						</div>
						<div class="col-md-8 ml-auto">
							<input type="text" class="form-control" id="user_name" require>
						</div>
					</div>
					<br>
					<div class="row form-group">
						<div class="col-md-4">
							<label for="user_email">Email</label>
						</div>
						<div class="col-md-8 ml-auto">
							<input type="mail" class="form-control" id="user_email" placeholder="sample@example.com" require>
						</div>
					</div>
					<br>
					<div class="row form-group">
						<div class="col-md-4">
							<label for="user_phone">Phone</label>
						</div>
						<div class="col-md-8 ml-auto">
							<input type="phone" class="form-control" id="user_phone" placeholder="000-0000-0000" require>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-4">
							<label for="user_gender">Gender</label>
						</div>
						<div class="col-md-8 ml-auto checkbox">
							<input type="checkbox" class="form-control" id="user_phone" require>
						</div>
					</div>
					<br>
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary waves-effect waves-light">会員登録</button>
				</div>
			</form>
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