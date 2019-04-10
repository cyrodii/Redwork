@extends('auth.layout')
@section('title', 'Login')
@section('content')
<body class="login-img">
    <div id="global-loader" ></div>
    <div class="page">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col col-login mx-auto">
                        <div class="text-center mb-6">
                            <img src="/admin/images/brand/logo.png" class="h-6" alt="">
                        </div>
                        <form class="card" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card-body p-6">
                                <div class="card-title text-center">Login to your Account</div>
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid state-invalid' : '' }}" id="username"  placeholder="Enter username" value="{{ old('username') }}" required>
                                    @if ($errors->has('username'))
                                        <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid state-invalid' : '' }}" id="password" placeholder="Password" required>
                                    @if (Route::has('password.request'))
                                        <label class="form-label">
                                            <a href="{{ route('password.request') }}" class="float-right small">I forgot password</a>
                                        </label>
                                    @endif									
                                    @if ($errors->has('password'))
                                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="custom-control-label">Remember me</span>
                                    </label>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                </div>
                                <div class="text-center text-muted mt-3">
                                    Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 