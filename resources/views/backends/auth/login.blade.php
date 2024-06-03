@extends('backends.master')
@section('main_contents')
<div class="vertical-align-wrap">
	<div class="vertical-align-middle auth-main">
		<div class="auth-box">
			<div class="top">
				<img src="https://www.wrraptheme.com/templates/lucid/html/assets/images/logo-white.svg" alt="Lucid">
			</div>
			<div class="card">
				<div class="header">
					<p class="lead">Login to your account</p>
				</div>
				<div class="body">
                    <form method="POST" action="{{ route('login') }}" class="form-auth-small">
                        @csrf
                        <!-- Email Address -->
						<div class="form-group">
							<label for="signin-email" class="control-label sr-only">{{ __('Email') }}</label>
							<input type="email" name="email" :value="old('email')" id="signin-email" class="form-control" required autofocus autocomplete="username" placeholder="Email" >
						</div>
						<div class="form-group">
							<label for="signin-password" class="control-label sr-only">{{ __('Password') }}</label>
							<input type="password" name="password" :value="old('password')" id="signin-password" class="form-control" required placeholder="Password">
						</div>
						<div class="form-group clearfix">
							<label class="fancy-checkbox element-left">
							    <input type="checkbox" name="remember" id="remember_me"><span>{{ __('Remember me') }}</span>
							</label>								
						</div>
						<button type="submit" class="btn btn-success btn-lg btn-block">LOGIN</button>
						<div class="bottom">
							<span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a></span>
							<span>Don't have an account? <a href="{{ route('register') }}">{{ __('Register') }}</a></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection