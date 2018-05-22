@extends("layouts.mainLayout")
@section("content")
<section class="login-form">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="section-title">Login</h2>
				<form action="/postLogin" method="post" class="new-project">
                    {{ csrf_field() }}
                    
                        @if( $errors->any())
                            <div class="alert alert-danger">
                            {{ $errors->first()}}
                              </div>
                        @endif
                  
					<div class="field ">
						<label for="email">Email</label>
						<div class="clearfix"></div>
						<input type="email" id="email" name="email" value="{{ old('email') }}" title="Please enter your account email address." tabindex="1"   placeholder="Email" required="required"/>
					</div>
					<div class="field ">
						<label for="password">Password</label>
						<div class="clearfix"></div>
						<input type="password" id="password" name="password" title="Please enter password" tabindex="2"   placeholder="Password" required="required"/>
					</div>
					<button class="btn yellow-btn" tabindex="16">Log In</button>
					<a class="btn btn-alternative" tabindex="17" href="forgot.html">Forgot</a>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<a href="/en/signup" class="btn signup btn-alternative">Sign Up</a>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-xs-12">
				<div class="or">
					OR
				</div>
				<ul class="social-login">
					<li>
						<a href="../../external.html?link=https://graph.facebook.com/oauth/authorize?client_id=573273662814660&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fspectrocoin.com%2Fen%2Ffacebook%2Fhandler&amp;scope=email%2Cuser_birthday%2Cuser_location%2Cpublic_profile&amp;state=93d0d3736c2e44deae3e3bd81a19c7b9db52d975-1526726317196-c00a4374716342ce30c572df" class="fb">
							<i>Sign in with Facebook</i>
						</a>
					</li>
					<li>
						<a href="index.html?csrfToken=91553807e39919680ab4eaa3754c111b13185eda-1526725929111-c00a4374716342ce30c572df" class="google">
							<i>Sign in with Google</i>
						</a>
					</li>
				</ul>
			</div>
		</div> -->
	</div>
</section>
@endsection