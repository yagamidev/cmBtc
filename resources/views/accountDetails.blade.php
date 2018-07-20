@extends("layouts.mainLayout")
@section("content")
<div id="wallet">
    <div id="dashboard">
        <div class="container">
            <div class="loaderUI" style="display: none;"></div>
            <section id="dashboard-content" style="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-title">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h1><span class="bt-stack bt-lg" 
                                        @switch($accountInfo->currency_name) 
                                        @case('BCH') 
                                        @case('BTC')
                                        style="color:#ffd700"
                                            @break
                                        @case('LTC')
                                        style="color:#29aafbba"
                                            @break  
                                        @case('ETH')
                                        style="color:#333"
                                            @break
                                        @default
                                        style="color:#64d3b2;" 
                                            @endswitch  >
                                        <i class="bt bt-shield bt-stack-2x"></i>
                                        <i class="bt bt-{{ strtolower($accountInfo->currency_name)}} bt-stack-1x bt-inverse"></i>
                                    </span></h1>
                                </div>
                            </div>
                            <div class="d-flex justify-space-between">
                                <a href="/account/send/{{ strtolower($accountInfo->currency_name)}}" class="btn btn-primary sendReceiveBtn"  
                                    @switch($accountInfo->currency_name) 
                                        @case('BCH') 
                                        @case('BTC')
                                        style="background:#ffd700"
                                        @break
                                    @case('LTC')
                                    style="background:#29aafbba"
                                        @break  
                                    @case('ETH')
                                    style="background:#333"
                                        @break
                                        @default
                                            style="background:#64d3b2;" 
                                        @endswitch>
                                        Send
                                    <i class="fa fa-arrow-up fa-2x"></i>
                                </a>
                                <a href="/account/request/{{ strtolower($accountInfo->currency_name)}}" class="btn btn-primary sendReceiveBtn" 
                                        @switch($accountInfo->currency_name) 
                                        @case('BCH') 
                                            @case('BTC')
                                        style="background:#ffd700"
                                        @break
                                        @case('LTC')
                                        style="background:#29aafbba"
                                        @break  
                                        @case('ETH')
                                        style="background:#333"
                                        @break
                                            @default
                                            style="background:#64d3b2;" 
                                        @endswitch>
                                        Request
                                    <i class="fa fa-arrow-down fa-2x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content-header">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="price-eur text-centered">
                                        <h3>Your Balance</h3> <b>
                                        {{ $accountInfo->balance }} {{ $accountInfo->currency_name}}</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column align-items-center">
                        <h3>Wallet Address</h3>
                        <div class="btc-wallet-address"  style="word-wrap:break-word">
                            <div class="deposit-bitcoin-qr-code"><img src="https://chart.googleapis.com/chart?chs=160x160&amp;chld=M|0&amp;cht=qr&amp;chl={{$accountInfo->address}}" alt="{{ $accountInfo->address}}"></div>
                        </div>
                        <div class="btc-wallet-address">
                            <div class="code text-center">
                                <span style="color: rgb(163, 163, 163); font-weight: bold; word-wrap:break-word">
                                            {{ $accountInfo->address}}
                                    </span><br/><br/>
                                    <button class="customBtn">
                                            Copy address <i class="fa fa-copy"></i>
                                    </button> 
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-10 col-md-offset-1" style="margin-top:50px; margin-bottom: 50px;">
                    <h2 class="text-left">Transactions history</h2>
                    @include("partials.transactionDetails")
                </div>
            </div>
        </div>
    </div>
</div>
@endsection