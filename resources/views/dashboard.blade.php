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
                        @default 
                            <div class="panel panel-orange">
                       @endswitch
                        <div class="panel-heading">
                          <div class="row">
                            <div class="col-xs-2" style="font-size:2em;">
                              <i class="fa fa-{{strtolower($wallet->currency_name)}} " data-fa-transform="grow-6"></i>
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

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-sm" style="margin-top:170px">
                <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                </div>
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&amp;text=U" alt="User Avatar" class="img-circle">
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&amp;text=ME" alt="User Avatar" class="img-circle">
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&amp;text=U" alt="User Avatar" class="img-circle">
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&amp;text=ME" alt="User Avatar" class="img-circle">
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" class="form-control input-lg" placeholder="Type your message here..." type="text">
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

      </div>


    </div>
  </div>
</div>
@endsection