@extends("layouts.mainLayout")
@section("content")

<section class="login-form">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="section-title">Sign Up</h2>
      @if ($errors->any())
          <div class="alert alert-danger">
            <h4>The form contains following errors : </h4>
              <ul style="list-style-type:circle;display:inline-block">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <form action="/postRegister" method="post" class="new-project" id="signup">
        {{ csrf_field() }}
            <div class="field ">
              <label for="username">Username</label>
              <div class="clearfix"></div>
              <input type="text" id="username" name="username" placeholder="Username" title="Please enter your username" tabindex="2" value="{{ old('username')}}"   required="required"/>
            </div>
          <div class="field ">
            <label for="email">E-mail</label>
            <div class="clearfix"></div>
            <input type="email" id="email" name="email" value="{{ old('email')}}" placeholder="E-mail"   title="Please enter a valid email address" tabindex="1" required="required"/>
          </div>
          <div class="form-group field div-password">
            <div class="field ">
              <label for="password">Password</label>
              <div class="clearfix"></div>
              <input type="password" id="password" name="password" placeholder="Password" title="Please enter the password" tabindex="2"   required="required"/>
            </div>
            <div class="clearfix"></div>
            <span class="input-group-btn">
              <button class="btn btn-default btn-popover" type="button" data-toggle="popover" data-trigger="focus" data-content="Minimun length: 8, maximum length:256; Should include capitals and lower letters and numbers; Cannot contain sequence of common characters"><i class="fa fa-info"></i></button>
            </span>
            <div class="clearfix"></div>
          </div>
          <div class="field ">
            <label for="passwordRepeat">Repeat password </label>
            <div class="clearfix"></div>
            <input type="password" id="passwordRepeat" name="password_confirmation" placeholder="Repeat the password"   title="Please repeat the password" tabindex="3" required="required"/>
          </div>
          <div class="agree">
            <span class="checkbox-options">
              <div class="accept form-group ">
                <div class="">
                    <input type="checkbox" id="test2" class="form-check-input is-invalid" checked="checked" />
                        <label for="test2" class="lab">
                    I accept <a href="terms.html" target="_blank">Terms and Conditions</a></label>
                  </div>
                    <div class="invalid-feedback errorTerms" style="display:none;color:red">
                           You must agree before submitting.
                      </div>
                </div>
              </span>
            </div>
            <div class="reCaptcha mt30">
              <!-- our recaptcha goes here -->
            </div>
            <br />
            <div class="row">
              <div class="col-xs-12 text-right">
                <button style="width: 100%; max-width: 500px;" class="btn yellow-btn" tabindex="16">Sign up</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script>
  var test2 = document.querySelector("#test2");
    var form = document.getElementById("signup");
    var lab = document.querySelector(".lab");
    var errorTerms = document.querySelector(".errorTerms");

    form.addEventListener("submit",function(e){
      console.log( test2);
      if( test2.checked == false ) {
        test2.className+=" invalid-feedback";
        lab.className+=" invalid-feedback";
        errorTerms.style.display ="block";
      }
        e.preventDefault();
    },false);

</script>
@endsection 