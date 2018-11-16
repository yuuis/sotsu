@extends('layouts.app')

@section('contents')

<header id="gtco-header" class="gtco-cover gtco-cover-thin gtco-inner" role="banner">
	<div class="gtco-container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0 text-left">
				<div class="display-t">
					<div class="display-tin">
						<div class="row">
							<div class="col-md-12 animate-box">
								<h1 class="no-margin">希望入居日</h1>
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
			<form action="{{ url('reserves') }}" method="post">
				{{ csrf_field() }}
				<div class="modal-body">
					<div class="row form-group">
						<div class="col-md-4">
							<label for="store">近くの不動産</label>
						</div>
						<div class="col-md-8 ml-auto">
							<select name="store_id" id="store" class="form-control">
								<option value="">取り扱い店舗を選択</option>
								<option value="1">テストのお店</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row form-group{{ $errors->has('visit_date') ? ' has-error' : '' }}">
						<div class="col-md-4">
							<label for="visitDatePicker">希望来店・内見日</label>
						</div>
						<div class="col-md-8 ml-auto">
							<input type="date" class="form-control" name="visit_date" id="visitDatePicker" value="{{ old('visit_date') }}"
							 require>
							@if ($errors->has('visit_date'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('visit_date') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<br>
					<div class="row form-group{{ $errors->has('enter_date') ? ' has-error' : '' }}">
						<div class="col-md-4">
							<label for="moveDatePicker">希望入居日</label>
						</div>
						<div class="col-md-8 ml-auto">
							<input type="date" class="form-control" name="enter_date" id="moveDatePicker" value="{{ old('enter_date') }}"
							 require>
							@if ($errors->has('enter_date'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('enter_date') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4">
							<label>注意事項</label>
						</div>
						<div class="col-md-8 ml-auto">
							<div class="well scrollable">
								契約内容<br>
								・まだ決まってないからね。<br>
								入居日<br>
								・入居日はあくまで目安だから、確実に抑えられるわけちゃうで。<br>
								免責事項<br>
								・我々は責任をとりません。
							</div>
						</div>
					</div>
					<div class="row form-group{{ $errors->has('confirm') ? ' has-error' : '' }}">
						<div class="col-md-4">
							<label>同意してください</label>
						</div>
						<div class="col-md-8 ml-auto">
							<div class="radio">
								<label for="confirm_agree">
									<input type="radio" name="confirm" id="confirm_agree" value="agree" @if(old('confirm')=="agree" ) checked
									 @endif>
									同意する
								</label>
								<label for="confirm_disagree">
									<input type="radio" name="confirm" id="confirm_disagree" value="disagree" @if(old('gender')=="disagree" )
									 checked @endif>
									同意しない
								</label>
							</div>
							@if ($errors->has('confirm'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('confirm') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<br>
				</div>
				<input type="hidden" name="room_id" value="{{ $datas['room_id'] }}">
				<input type="hidden" name="furniture_set_id" value="@if(isset($datas['furniture_set_id'])){{$datas['furniture_set_id']}}@endif">
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary waves-effect waves-light" disabled>予約する</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<script type="text/javascript">
	$(function() {
		const origin = $("#moveDatePicker").clone();

		$("#visitDatePicker").datepicker({
			minDate: 0
		});

		$("#moveDatePicker").datepicker({
			minDate: 0
		});

		$("#visitDatePicker").change(function() {
			if ($("#visitDatePicker").val()) {
				$("#moveDatePicker").replaceWith(origin.clone());
				$("#moveDatePicker").datepicker({
					minDate: Math.ceil((new Date($("#visitDatePicker").val()).getTime() - new Date().getTime()) / (1000 * 60 *
						60 * 24))
				});
			}
		});

		$('input[name="confirm"]').change(function() {
			if ($('input[name="confirm"]:checked').val() == "agree") $('button[type="submit"]').removeAttr('disabled');
			else $('button[type="submit"]').attr('disabled', 'disabled');
		});
	});
</script>
@endsection

@section('style')
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/cupertino/jquery-ui.css">
<style>
	.scrollable {
		overflow: scroll !important;
		height: 100px;
	}
</style>
@endsection