@extends("layouts/mainLayout") @section("content")

<div id="contacts_section1" class="section-2cols bg-section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-lg-5 section-left">
        <div class="contacts-desc">
          <p>If you have any inquiries or suggestions regarding services or the company itself, please get in touch. To do this, you can fill out the form on the right-hand side below. It usually takes 24 hours or less to get a response from SpectroCoin.
            If you prefer to contact the company through other means, you can find details on the left-hand side below. Due to its international approach, SpectroCoin can respond to requests in most languages, so feel free to use your preferred language.&nbsp;</p>
        </div>
        <div class="divider-mini">
          <hr>
        </div>
        <div vocab="http://schema.org/" typeof="Organization">
          <h4 property="name" class="hidden">CamerBitcoin Finance, Ltd</h4>
          <div id="contacts_info_block1" class="contacts-info-block">
            <div class="contact-item">
              <i class="icon-contact icon-email"></i>
              <div class="contact-item-block">
                <a property="email" href="mailto:helpdesk@camerbitcoin.com">helpdesk@camerbitcoin.com</a>
              </div>
            </div>
            <div class="contact-item">
              <i class="icon-contact icon-phone"></i>
              <div class="contact-item-block">
                <a property="telephone" href="tel: 00 00 00 00" dir="ltr">+327 00 00 00 00</a>
              </div>
            </div>
          </div>
          <div id="contacts_info_block2" class="row contacts-info-block">
            <div class="col-xs-6 col-md-12">
              <div class="contact-item">
                <i class="icon-contact icon-location"></i>
                <div class="contact-item-block">
                  <div class="contact-item-title">Business development</div>
                  <div class="contact-item-text">
                    CamerBitcoin Finance, Ltd<br> Bepanda <br> Cameroon
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 section-right">
        <div class="row">
          <div class="col-lg-12">

            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <form action="/en/contact" method="POST" class="new-project">
            {{ csrf_field() }}
              <div class="input-group">
                <label>Name</label>
                <input id="name" name="name" value="{{ old('name')}}" title="Please enter your name." tabindex="1" type="text">
                @if ($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
              </div>
              <div class="input-group">
                <label>Email</label>
                <input id="email" name="email" value="{{ old('email')}}" title="Please enter your email address." tabindex="2" type="email">
                @if ($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                @endif
              </div>
              <div class="input-group">
                <label>Phone</label>
                <input id="phone" name="phone" value="{{ old('phone')}}" title="Please enter your phone number." tabindex="3" type="text">
              </div>
              <div class="input-group">
                <label>Subject</label>
                <input id="subject" name="subject" value="{{ old('subject')}}" title="Please enter question&amp;#39;s subject." tabindex="4" type="text">
              </div>
              <div class="input-group">
                <label>Question</label>
                <textarea id="question" value="{{ old('question') }}" name="question" title="Please enter your question." tabindex="5"></textarea>
                @if ($errors->has('question'))
                    <div class="error">{{ $errors->first('question') }}</div>
                @endif
              </div>
              <div class="form-button-wrapper">
                <input type="submit" name="submit" value="Contact" tabindex="1" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
