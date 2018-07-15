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
	</div>
</section>
@endsection