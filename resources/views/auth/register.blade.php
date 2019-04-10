@extends('auth.layout')
@section('title', 'Register')
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
                            <form class="card" method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="card-body p-6">
									<div class="card-title text-center">Create New Account</div>
									<div class="form-group">
										<label class="form-label">Username</label>
										<input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid state-invalid' : '' }}" name="username" placeholder="Enter username" value="{{ old('username') }}" required>
                                        @if ($errors->has('username'))
                                            <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                                        @endif           
                                    </div>
									<div class="form-group">
										<label class="form-label">Email address</label>
										<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid state-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" required>
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                        @endif          
                                    </div>
									<div class="form-group">
										<label class="form-label">Password</label>
										<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid state-invalid' : '' }}" name="password" placeholder="Password" required>
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                        @endif    
                                    </div>
									<div class="form-group">
										<label class="form-label">Confirm Password</label>
										<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
									</div>
									<div class="form-group">
										<label class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" required>
											<span class="custom-control-label">Agree the <a href="/privacy">terms and policy</a></span>
										</label>
									</div>
									<div class="form-footer">
										<button type="submit" class="btn btn-primary btn-block">Create new account</button>
									</div>
									<div class="text-center text-muted mt-4">
									Already have account? <a href="{{ route('login') }}">Sign in</a>
								</div>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
 