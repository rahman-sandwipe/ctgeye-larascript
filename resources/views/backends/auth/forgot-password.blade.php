@extends('backends.master')
@section('main_contents')
<div class="vertical-align-wrap">
    <div class="vertical-align-middle auth-main">
        <div class="auth-box">
            <div class="top">
                <img src="https://www.wrraptheme.com/templates/lucid/html/assets/images/logo-white.svg" alt="Protidiner Shopping">
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Recover my password</p>
                </div>
                <div class="body">
                    
                    <p>Please enter your email address below to receive instructions for resetting password.</p>
                    <form class="form-auth-small" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus placeholder="email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('RESET PASSWORD') }}</button>
                        <div class="bottom">
                            <span class="helper-text">Know your password? <a href="{{ route('login') }}">{{ __('Login') }}</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection