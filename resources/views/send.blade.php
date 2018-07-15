@extends("layouts.mainLayout")
@section("content")
<nav id="dashboard-secondary-nav">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="secondary-nav">
          <li>
            <a href="/en/account.html" class="active">
              <div class="icon icon-wallet"></div>
              <span>Wallets</span>
            </a>
          </li>
          <li>
            <a href="/en/exchange/currency.html" class="">
              <div class="icon icon-exchange"></div>
              <span>Exchange</span>
            </a>
          </li>
          <li>
            <a href="/en/deposit.html" class="">
              <div class="icon icon-deposit"></div>
              <span>Deposit</span>
            </a>
          </li>
          <li>
            <a href="/en/withdraw.html" class="">
              <div class="icon icon-withdraw"></div>
              <span>Withdraw</span>
            </a>
          </li>
          <li>
            <a href="/en/cards.html" class="">
              <div class="icon icon-cards"></div>
              <span>Cards</span>
            </a>
          </li>
          <li>
            <a href="/en/merchant/api/list.html">
              <div class="icon icon-projects"></div>
              <span>Merchant Projects</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div id="dashboard">
  <div class="container">
    <div class="row">
      @include("partials.sideWrapper")
      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" >
        <iframe id="depositBTCIframe" style="display: none" src="about:blank"></iframe>
        <section id="dashboard-content">
          <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10">
              <div class="content-title" style="color: black !important">
                <div class="row" style="color: black !important">
                  <div class="col-xs-12">
                    <h1>
                    <a href="">
                      <i class="bt bt-shield bt-stack-2x"></i>
                    <i class="bt bt-{{ strtolower($accountInfo->currency_name)}} bt-stack-1x bt-inverse">
                    </a>
                    Deposit {{ $accountInfo->currency_name}}
                    </h1>
                  </div>
                </div>
              </div>
              <div class="deposit-bitcoin-section">
                <div class="row">
                  <div class="col-xs-12 text-centered mt-15">
                    <div class="alert alert-danger" id="client-error" style="display: none;">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <h3>{{ ucfirst($accountInfo->currency_name) }} address</h3>
                    <div class="deposit-bitcoin-qr-code">
                      <img id="btcDepositAccQR" src="https://chart.googleapis.com/chart?chs=160x160&amp;chld=M|0&amp;cht=qr&amp;chl={{ $accountInfo->address}}" alt="{{ $accountInfo->address}}">
                      <div class="code" style="color: black">
                        <b id="btcDepositAcc" class="inlineBlock">{{ $accountInfo->address}}</b>
                      </div>
                    </div>
                    <div class="ui-buttons-line align-btn-center">
                      <button class="ui-button" id="copy" style="background:plum">
                      <span class="copyText">Copy</span>
                      <span class="copiedText"></span>
                      <span class="ui-button-icon icon-6" id="cpd" style="display: none"></span>
                      </button>
                    </div>
                  </div>
                  <div class="clear"></div>

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
@endsection