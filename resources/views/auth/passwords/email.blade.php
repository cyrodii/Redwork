@extends('auth.layout')
@section('title', 'Forgot Password')
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
                        <form class="card" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="card-body p-6">
                                <div class="card-title text-center">Forgot your password?</div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid state-invalid' : '' }}" id="email"  placeholder="Enter Email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
                                    <div class="text-center text-muted mt-3">
                                       <a href="{{ route('login') }}">Go Back</a>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
