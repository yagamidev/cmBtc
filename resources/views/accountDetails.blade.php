@extends("layouts.mainLayout")
@section("content")
<div id="wallet">
    <div id="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-3 col-sm-4 col-xs-12" style="border:1px solid rgb(218, 225, 233)">
                    @include("partials.transactionDetails")
                </div>
                <div class="col-lg-5 col-md-9 col-sm-8 col-xs-12" style="border:1px solid rgb(218, 225, 233)">
                    <div class="loaderUI" style="display: none;"></div>
                    <section id="dashboard-content" style="">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
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
                                    <div class="row">
                                        <div class="col-lg-6 col-md-5 col-xs-5">

                                            <button class="btn btn-primary sendReceiveBtn"  
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
                                                                                            @endswitch >
                                                Send
                                                <i class="fa fa-arrow-up fa-2x"></i>
                                            </button>
                                        </div>
                                        <div class="col-lg-6 col-md-5 col-xs-5" >
                                            <button class="btn btn-primary sendReceiveBtn" 
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
                                                                                            @endswitch >
                                                Request
                                                <i class="fa fa-arrow-down fa-2x"></i>
                                            </button>
                                        </div> 
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
                                    <div class="row">
                                        <div class="col-xs-12" style="">
                                            <h3>Wallet Address</h3>
                                                <!---->
                                                <div class="col-lg-8 col-md-3 col-xs-12 col-lg-offset-2">
                                                    <div class="btc-wallet-address"  style="word-wrap:break-word">
                                                        <div class="deposit-bitcoin-qr-code"><img src="https://chart.googleapis.com/chart?chs=160x160&amp;chld=M|0&amp;cht=qr&amp;chl={{$accountInfo->address}}" alt="{{ $accountInfo->address}}"></div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-9 col-xs-12">
                                            <div class="btc-wallet-address">
                                                <div class="code">
                                                    <span style="color: rgb(163, 163, 163); font-weight: bold;">
                                                                {{ $accountInfo->address}}
                                                     </span><br/><br/>
                                                     <button class="customBtn pull-right">
                                                                Copy address <i class="fa fa-copy"></i>
                                                        </button> 
                                                     
                                                 </div>
                                                </div>
                                         </div>
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
@endsection