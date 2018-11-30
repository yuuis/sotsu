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
								<h1 class="no-margin">お客様の情報を入力してください</h1>
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
					<div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<div class="col-md-4">
							<label for="user_name">お名前</label>
						</div>
						<div class="col-md-8 ml-auto">
							<input type="text" class="form-control" name="name" id="user_name" value="{{ old('name') }}" require>
							@if ($errors->has('name'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<br>
					<div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<div class="col-md-4">
							<label for="user_email">メールアドレス</label>
						</div>
						<div class="col-md-8 ml-auto">
							<input type="mail" class="form-control" name="email" id="user_email" placeholder="sample@example.com" value="{{ old('email') }}"
							 require>
							@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<br>
					<div class="row form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
						<div class="col-md-4">
							<label for="user_phone">電話番号</label>
						</div>
						<div class="col-md-8 ml-auto">
							<input type="phone" class="form-control" name="phone" id="user_phone" placeholder="000-0000-0000" value="{{ old('phone') }}"
							 require>
							@if ($errors->has('phone'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('phone') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="row form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
						<div class="col-md-4">
							<label>性別</label>
						</div>
						<div class="col-md-8 ml-auto">
							<div class="radio">
								<label for="user_gender_man">
									<input type="radio" name="gender" id="user_gender_man" value="1" @if(old('gender')=="1" ) checked @endif> 男性
								</label>
							</div>
							<div class="radio">
								<label for="user_gender_woman">
									<input type="radio" name="gender" id="user_gender_woman" value="2" @if(old('gender')=="2" ) checked @endif> 女性
								</label>
							</div>
							<div class="radio">
								<label for="user_gender_other">
									<input type="radio" name="gender" id="user_gender_other" value="3" @if(old('gender')=="3" ) checked @endif>
									その他
								</label>
							</div>
							@if ($errors->has('gender'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('gender') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<br>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary waves-effect waves-light">アカウント登録</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(function() {

	});
</script>
@endsection