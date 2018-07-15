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
      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div id="wallet">
          <div id="dashboard">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                  <section id="dashboard-content">
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                        <div class="content-title">
                          <div class="row">
                            <div class="col-xs-12">
                              <h1>
                              Wallets
                              </h1>
                            </div>
                          </div>
                        </div>
                        <div class="deposit-bitcoint-section history-balance">
                          
                          <div class="row" id="balances-row">
                            @foreach( $wallets as $wallet)
                            <div class="col-md-6">
                              @switch($wallet->currency_name)
                              @case("LTC")
                              <div class="panel panel-blue">
                                @break
                                @case("XAF")
                                <div class="panel panel-orange bankera">
                                  @break
                                  @case("ETH")
                                  <div class="panel panel-grey">
                                    @break
                                    @default
                                    <div class="panel panel-orange">
                                      @endswitch
                                      <div class="panel-heading">
                                        <div class="row">
                                          <div class="col-xs-2" style="font-size:2em;">
                                            <i class="bt bt-{{strtolower($wallet->currency_name)}} bt-stack-3x" ></i>
                                          </div>
                                          <div class="col-xs-10 text-right huge title-tooltip" title-tooltip="" dir="ltr" title="{{ $wallet->balance}}">{{ $wallet->balance}}</div>
                                        </div>
                                        <div class="row">
                                          <div class="col-xs-12 text-right">
                                            <div>
                                            </div>
                                            <div class="accName">{{$wallet->currency_name}}</div>
                                          </div>
                                        </div>
                                      </div>
                                      <a href="/en/account/history/{{ strtolower($wallet->currency_name)}}">
                                        <div class="panel-footer">
                                          <span class="pull-left">View account</span>
                                          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                          <div class="clearfix"></div>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                  @endforeach
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection